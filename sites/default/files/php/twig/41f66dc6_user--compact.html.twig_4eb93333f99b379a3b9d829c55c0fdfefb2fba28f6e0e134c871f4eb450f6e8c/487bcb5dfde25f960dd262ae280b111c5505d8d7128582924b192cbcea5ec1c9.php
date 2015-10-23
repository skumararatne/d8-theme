<?php

/* themes/adaptivetheme/at_core/templates/user/user--compact.html.twig */
class __TwigTemplate_1224116e595c2ef8b678e260e2cfea4f4dcdc86d507f4826c36f20bc035c52c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 34
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 35
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/user/user--compact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 35,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * TODO: Track https://drupal.org/node/2247677. This was added to rip the markup*/
/*  * out when displaying the user picture in nodes and commments, otherwise you get*/
/*  * crazy markup and even empty article tags etc.*/
/*  **/
/*  * @file*/
/*  * Default theme implementation to present user data included in the compact display mode.*/
/*  **/
/*  * This template is mainly used when viewing a node or comment where the user picture*/
/*  * is set to display, we strip off the articl wrapper and any other items or markup.*/
/*  **/
/*  * Available variables:*/
/*  * - label: the users name set as a title. Adaptivetheme moves the h1 inside*/
/*  *   the article element for proper outlines.*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'.*/
/*  * - Field variables: For each field instance attached to the user a*/
/*  *   corresponding variable is defined; e.g., account.field_example has a*/
/*  *   variable 'field_example' defined. When needing to access a field's raw*/
/*  *   values, developers/themers are strongly encouraged to use these*/
/*  *   variables. Otherwise they will have to explicitly specify the desired*/
/*  *   field language, e.g. account.field_example.en, thus overriding any*/
/*  *   language negotiation rule that was previously applied.*/
/*  * - title_attributes: HTML attributes set on the label wrapper markup.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  * @see at_core_preprocess_user()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if content %}*/
/*   {{- content -}}*/
/* {% endif %}*/
/* */
