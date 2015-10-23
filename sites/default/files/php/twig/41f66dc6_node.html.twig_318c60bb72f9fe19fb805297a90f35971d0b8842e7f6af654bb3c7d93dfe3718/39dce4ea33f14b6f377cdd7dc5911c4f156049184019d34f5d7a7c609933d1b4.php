<?php

/* themes/adaptivetheme/at_core/templates/node/node.html.twig */
class __TwigTemplate_d621982335afbefbc3208eed07532c329f7d0c82d2eb3ac3d5e32ff4a8385d6f extends Twig_Template
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
        // line 72
        $context["classes"] = array(0 => "node", 1 => ("node--id-" . $this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "id", array())), 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 3 => (($this->getAttribute(        // line 76
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 77
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 78
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 79
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 82
        echo "<article";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  <header";
        // line 84
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_attributes"]) ? $context["header_attributes"] : null), "html", null, true);
        echo ">
    ";
        // line 85
        if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) {
            // line 86
            echo "      <p class=\"unpublished__title clearfix\" aria-label=\"Status message\" role=\"contentinfo\">
        ";
            // line 87
            echo t("Unpublished", array());
            // line 88
            echo "      </p>
    ";
        }
        // line 90
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 91
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 92
            echo "      ";
            if ((isset($context["page"]) ? $context["page"] : null)) {
                // line 93
                echo "        <h1";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
                echo ">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</h1>
      ";
            } else {
                // line 95
                echo "        <h2";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
                echo "><a href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</a></h2>
      ";
            }
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 100
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 101
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["meta_attributes"]) ? $context["meta_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 102
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
        <div";
            // line 103
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_attributes"]) ? $context["submitted_attributes"] : null), "html", null, true);
            echo ">
          ";
            // line 104
            echo t("By <address@author_attributes>@author_name</address> on <time class=\"node__date\">@date</time>", array("@author_attributes" =>             // line 105
(isset($context["author_attributes"]) ? $context["author_attributes"] : null), "@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 107
            echo "          ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 111
        echo "  </header>

  <div";
        // line 113
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
        echo ">
    ";
        // line 114
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 117
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 118
            echo "    <footer";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_attributes"]) ? $context["footer_attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 119
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 122
        echo "
  ";
        // line 123
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true);
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 123,  138 => 122,  132 => 119,  127 => 118,  125 => 117,  119 => 114,  115 => 113,  111 => 111,  103 => 107,  101 => 105,  100 => 104,  96 => 103,  92 => 102,  87 => 101,  85 => 100,  79 => 98,  76 => 97,  66 => 95,  58 => 93,  55 => 92,  53 => 91,  48 => 90,  44 => 88,  42 => 87,  39 => 86,  37 => 85,  33 => 84,  27 => 82,  25 => 79,  24 => 78,  23 => 77,  22 => 76,  21 => 75,  20 => 74,  19 => 72,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: Full node entity.*/
/*  *   - id: The node ID.*/
/*  *   - bundle: The type of the node, for example, "page" or "article".*/
/*  *   - authorid: The user ID of the node author.*/
/*  *   - createdtime: Formatted creation date. Preprocess functions can*/
/*  *     reformat it by calling format_date() with the desired parameters on*/
/*  *     $variables['node']->getCreatedTime().*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  **/
/*  * @todo Remove the id attribute (or make it a class), because if that gets*/
/*  *   rendered twice on a page this is invalid CSS for example: two lists*/
/*  *   in different view modes.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'node',*/
/*     'node--id-' ~ node.id,*/
/*     'node--type-' ~ node.bundle|clean_class,*/
/*     node.isPromoted() ? 'node--promoted',*/
/*     node.isSticky() ? 'node--sticky',*/
/*     not node.isPublished() ? 'node--unpublished',*/
/*     view_mode ? 'node--view-mode-' ~ view_mode|clean_class,*/
/*   ]*/
/* %}*/
/* <article{{ attributes.addClass(classes) }}>*/
/* */
/*   <header{{ header_attributes }}>*/
/*     {% if not node.isPublished() %}*/
/*       <p class="unpublished__title clearfix" aria-label="Status message" role="contentinfo">*/
/*         {% trans %}Unpublished{% endtrans %}*/
/*       </p>*/
/*     {% endif %}*/
/*     {{ title_prefix }}*/
/*     {% if label %}*/
/*       {% if page %}*/
/*         <h1{{ title_attributes }}>{{ label }}</h1>*/
/*       {% else %}*/
/*         <h2{{ title_attributes }}><a href="{{ url }}" class="node__title-link" rel="bookmark">{{ label }}</a></h2>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/* */
/*     {% if display_submitted %}*/
/*       <div{{ meta_attributes }}>*/
/*         {{ author_picture }}*/
/*         <div{{ submitted_attributes }}>*/
/*           {% trans %}*/
/*             By <address{{ author_attributes|raw }}>{{ author_name|raw }}</address> on <time class="node__date">{{ date|raw }}</time>*/
/*           {% endtrans %}*/
/*           {{ metadata }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </header>*/
/* */
/*   <div{{ content_attributes }}>*/
/*     {{ content|without('comment', 'links') }}*/
/*   </div>*/
/* */
/*   {% if content.links %}*/
/*     <footer{{ footer_attributes }}>*/
/*       {{ content.links }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/*   {{ content.comment }}*/
/* */
/* </article>*/
/* */
