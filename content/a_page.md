---
Title: A Page with Twig Template
Description:
Author: Marcus
Date: 2020-06-07
Template: register

data:
  url: https://docs.google.com/document/d/14Gw1yAHpUhiwPhj4hHrep4skR1knMemPa2dKzB0JMlw/export?format=txt
  type: json
---

# A Page with Twig Template 

💡 If you end up with empty `<p></p>` in your html that's most likely from Twig directives (like `for`)
Best is you wrap the code in `<div markdown="0"></div>` in case you enabled `content_config.extra` in your config settings

{{dump(meta)}}

<div markdown="0">{% for user in meta.json %}</div>

|           Smarty          |          Value          |
|---------------------------|-------------------------|
| `{{ user.VIN }}`           | {{ user.VIN }}          |
| `{{ user.Photo }}`         | {{ user.Photo }}         |
| `{{ user.Colour }}` | {{ user.Colour }} |



{% endfor %}


https://docs.google.com/document/d/14Gw1yAHpUhiwPhj4hHrep4skR1knMemPa2dKzB0JMlw/edit?usp=sharing
https://docs.google.com/document/d/14Gw1yAHpUhiwPhj4hHrep4skR1knMemPa2dKzB0JMlw/export?format=txt