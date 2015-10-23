<?php

/* field.html.twig */
class __TwigTemplate_3272ec565f1f99d322c81a43da7b0f494889cf6169f62fdb64469a983d94dae8 extends Twig_Template
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
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 36
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 38
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field-name-" .         // line 39
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 40
(isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" .         // line 41
(isset($context["label_display"]) ? $context["label_display"] : null)), 5 => (((        // line 42
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")));
        // line 46
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 48
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 51
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 52
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 53
            echo "    <h3";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h3>
  ";
        }
        // line 55
        echo "  <div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field__items"), "method"), "html", null, true);
        echo ">
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 59,  55 => 57,  51 => 56,  46 => 55,  38 => 53,  36 => 52,  31 => 51,  29 => 48,  28 => 46,  26 => 42,  25 => 41,  24 => 40,  23 => 39,  22 => 38,  21 => 36,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for a field.*/
/*  * AT uses h3 for field labels.*/
/*  **/
/*  * To override output, copy the "field.html.twig" from the templates directory*/
/*  * to your theme's directory and customize it, just like customizing other*/
/*  * Drupal templates such as page.html.twig or node.html.twig.*/
/*  **/
/*  * For example, for a field named 'body' displayed on the 'article' content*/
/*  * type, any of the following templates will override this default*/
/*  * implementation. The first of these templates that exists is used:*/
/*  * - field--body--article.html.twig*/
/*  * - field--article.html.twig*/
/*  * - field--body.html.twig*/
/*  * - field.html.twig*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - content_attributes: HTML attributes for the content.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set field_name_class = field_name|clean_class %}*/
/* {%*/
/*   set classes = [*/
/*     'field',*/
/*     'field-' ~ entity_type|clean_class ~ '--' ~ field_name_class,*/
/*     'field-name-' ~ field_name_class,*/
/*     'field-type-' ~ field_type|clean_class,*/
/*     'field-label-' ~ label_display,*/
/*     label_display == 'inline' ? 'clearfix',*/
/*   ]*/
/* %}*/
/* {%*/
/*   set title_classes = [*/
/*     'field__label',*/
/*     label_display == 'visually_hidden' ? 'visually-hidden',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if not label_hidden %}*/
/*     <h3{{ title_attributes.addClass(title_classes) }}>{{ label }}</h3>*/
/*   {% endif %}*/
/*   <div{{ content_attributes.addClass('field__items') }}>*/
/*     {% for item in items %}*/
/*       <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
