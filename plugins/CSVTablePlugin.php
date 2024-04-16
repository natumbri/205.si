<?php

/**
 * CSVTablePlugin
 * Extract rows from CSV.
 * Insert field value into markdown content
 */
class CSVTablePlugin extends AbstractPicoPlugin
{

    // protected $enabled = false;
   
    public function onContentPrepared(&$content)
    {
 
        // Search for Embed shortcodes allover the content
        preg_match_all('#\[csv_table *.*?\]#s', $content, $matches);

        // Make sure we found some shortcodes
        if (count($matches[0]) > 0) {
            $error = false;
            // Walk through shortcodes one by one
            foreach ($matches[0] as $match) 
            {
                // Get csv file location
                if ( ! preg_match_all('/file=[\"\']([^\"\']*)[\'\"]/', $match, $file))
                    $error = true;

                // check if columns or rows
                preg_match('/is_data_column=[\"]([^\"]*)[\"]/', $match, $column);
                
                if (! $error)
                {
                    if($column != null)
                            $is_column = $column[1];
                        else
                            $is_column = 1;
                            
                    // Replace embeding code with the shortcode in the content
                    $result = $this->getData($file[1], $is_column);
                    error_log($result[1][1]);
                    // $graphR->values($result);
                    
                    // $content = preg_replace('#\[csv_grap *.*?\]#s',  $graphR->fetch($graph[1], false), $content, 1);
                    // error_log(values($result));
                    $content = preg_replace('#\[csv_table *.*?\]#s', implode("\n", $result), $content, 1);

                }
                else
                    $content = preg_replace('#\[csv_table *.*?\]#s', '*CSVTable ERROR*', $content, 1);
                
                $error = false;
                
            }
        }
        
    }
    
    
    // private function getData($files, $is_column)
    private function getData($files, $is_column)
    {
        error_log($files[0]);
        $b = "";
        $results =array();
        foreach($files as $file)
        {
            if (($h = fopen($file, "r")) !== FALSE) 
            {
                $headers = (fgetcsv($h));
                $num = count($headers);
                $results[0] = implode("|", $headers);
                for ($c=0; $c < $num; $c++) {
                  $b = "$b--|";
                }
                $results[1] = $b;
                $row = 2;  // start at row 2, after headers and markdown line
                while (($data = fgetcsv($h)) !== false)
                {
                    $results[$row] = implode("|", $data);
                    $row++;
                }
            }
            // Close the file
            fclose($h);
        }
        return $results;
    }
       
}
