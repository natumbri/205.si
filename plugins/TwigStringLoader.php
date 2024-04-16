<?php

/**
 * Render Inline Twig Templates
 *
 * Instead of rely on Pico's `%meta.*% replacement mechanism,
 * write Twig tags directly into you page.
 *
 * This might be an security issue, you need to know what you are doing!
 *
 * @author  Marcus Obst
 * @link    https://gist.github.com/marcus-at-localhost/19c8133509f6cd3001cd96ce7038ab92
 * @license http://opensource.org/licenses/MIT
 * @version 0.2
 */
class TwigStringLoader extends AbstractPicoPlugin
{
	const API_VERSION = 2;
  // protected $enabled = false;


  /**
   * Edge Cases
   * Twig tags as {{example.code}}
   * 
   * There are edge cases to take care of, if you want to use Twig templating language 
   * in markdown code blocks like I did on this site. You have to convert curly braces
   * in code blocks {} to html entities before render the Twig string, else the Twig 
   * engine tries to render it and might crash your script.
   *
   * Triggered after Pico has parsed the contents of the file to serve
   *
   * @param string &$content parsed contents (HTML) of the requested page 
   */
  public function onContentParsed(&$content)
  {
    // create a new DOMDocument and load $content into it (noting utf-8 encoding)
    $doc = new DOMDocument();
    @$doc ->loadHTML('<?xml encoding="utf-8" ?>' . $content);
    
    // Iterate over each code block and convert '{' and '}' into something else
    foreach ($doc->getElementsByTagName('code') as $code) {
      $code -> nodeValue = str_replace(['{','}'], ['#1two3;','#1two5;'], $code -> nodeValue);
      // var_dump($code -> nodeValue);
    }
    // save the HTML back into the $content, with '{' and '}' decimal encoded
    // error_log(str_replace(['#1two3;','#1two5;'], ['&#123;','&#125;'], $doc -> saveHTML()));
    $content = str_replace(['#1two3;','#1two5;'], ['&#123;','&#125;'], $doc -> saveHTML());
  }


	/**
	 * Fix urlencode() curly brackets in src and href
	 *
	 * @link https://stackoverflow.com/a/20104953/814031
	 * @param  string $template_string html string
	 * @return string
	 */
	protected function fix_template_variable_tokens($template_string)
	{
		$pattern = "/%7B%7B(.*?)%7D%7D/";
		$replacement = '{{$1}}';
		return preg_replace($pattern, $replacement, $template_string);
	}

  /**
   * Triggered before Pico renders the page
   *
   * @param string &$templateName  file name of the template
   * @param array  &$twigVariables template variables
   */
	public function onPageRendering(&$templateName, array &$twigVariables)
	{
		// fix urlencoded src or href attributes with twig curly braces
		// @link https://github.com/erusev/parsedown/issues/266#issuecomment-159139099
		$twigVariables['content'] = $this->fix_template_variable_tokens($twigVariables['content']);
		// create Twig Template 
		$template = $this->getTwig()->createTemplate($twigVariables['content']);
    // render Twig Template from String
		$markup = new Twig_Markup($template->render($twigVariables), 'UTF-8');
		// error_log($markup);
	  $twigVariables['content'] = $markup;
	}

	public function onTwigRegistered(Twig_Environment &$twig)
	{
		$twig->addExtension(new \Twig\Extension\StringLoaderExtension());
	}
}
