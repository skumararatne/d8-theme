<?php

/* core/themes/classy/templates/form/form.html.twig */
class __TwigTemplate_2bcaa5314b32eb52358353e9db6a24ad62fe44b24f185aeaef84b56b979797ad extends Twig_Template
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
        // line 13
        echo "<form";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 14,  19 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'form' element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  *//* */
/* #}*/
/* <form{{ attributes }}>*/
/*   {{ children }}*/
/* </form>*/
/* */
