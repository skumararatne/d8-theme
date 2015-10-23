<?php

/* themes/adaptivetheme/at_core/templates/field/field--image.html.twig */
class __TwigTemplate_e1b2c2b3c6de4f48b250d2a985c6e9c990ddb2203588cc38702823eaeddd38b7 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 1)) {
            // line 52
            echo "  ";
            $context["count_class"] = "has-multiple";
        } else {
            // line 54
            echo "  ";
            $context["count_class"] = "has-single";
        }
        // line 56
        echo "
<div";
        // line 57
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => (isset($context["count_class"]) ? $context["count_class"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 58
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 59
            echo "    <h3";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null), 1 => (isset($context["image_align"]) ? $context["image_align"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h3>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 63
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", array()), "show", array()) == true)) {
                // line 64
                echo "      <figure";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1)), 2 => "caption", 3 => "caption-img", 4 => (isset($context["image_align"]) ? $context["image_align"] : null)), "method"), "html", null, true);
                echo " role=\"group\">
    ";
            } else {
                // line 66
                echo "      <figure";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1)), 2 => (isset($context["image_align"]) ? $context["image_align"] : null)), "method"), "html", null, true);
                echo ">
    ";
            }
            // line 68
            echo "      ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "
      ";
            // line 69
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", array()), "show", array()) == true)) {
                // line 70
                echo "        <figcaption class=\"field-type-image__figcaption\" property=\"schema:description\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "caption", array()), "title", array()), "html", null, true);
                echo "</figcaption>
      ";
            }
            // line 72
            echo "    </figure>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/field/field--image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 74,  93 => 72,  87 => 70,  85 => 69,  80 => 68,  74 => 66,  68 => 64,  65 => 63,  61 => 62,  58 => 61,  50 => 59,  48 => 58,  44 => 57,  41 => 56,  37 => 54,  33 => 52,  31 => 51,  29 => 48,  28 => 46,  26 => 42,  25 => 41,  24 => 40,  23 => 39,  22 => 38,  21 => 36,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for an image field.*/
/*  * AT can print captions on images, see your theme settings.*/
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
/* {% if items|length > 1 %}*/
/*   {% set count_class = 'has-multiple' %}*/
/* {% else %}*/
/*   {% set count_class = 'has-single' %}*/
/* {% endif %}*/
/* */
/* <div{{ attributes.addClass(classes, count_class) }}>*/
/*   {% if not label_hidden %}*/
/*     <h3{{ title_attributes.addClass(title_classes, image_align) }}>{{ label }}</h3>*/
/*   {% endif %}*/
/* */
/*   {% for delta, item in items %}*/
/*     {% if item.caption.show == true %}*/
/*       <figure{{ item.attributes.addClass('field-type-image__figure', 'image-count-' ~ (delta + 1), 'caption', 'caption-img', image_align) }} role="group">*/
/*     {% else %}*/
/*       <figure{{ item.attributes.addClass('field-type-image__figure', 'image-count-' ~ (delta + 1), image_align) }}>*/
/*     {% endif %}*/
/*       {{ item.content }}*/
/*       {% if item.caption.show == true %}*/
/*         <figcaption class="field-type-image__figcaption" property="schema:description">{{ item.caption.title }}</figcaption>*/
/*       {% endif %}*/
/*     </figure>*/
/*   {% endfor %}*/
/* </div>*/
/* */
