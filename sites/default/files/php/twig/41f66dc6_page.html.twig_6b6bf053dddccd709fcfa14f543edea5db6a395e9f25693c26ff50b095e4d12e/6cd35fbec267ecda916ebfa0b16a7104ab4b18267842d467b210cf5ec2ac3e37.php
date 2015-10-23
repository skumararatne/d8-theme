<?php

/* themes/pixture_reloaded/templates/page/page.html.twig */
class __TwigTemplate_3513ab7541093b2b1766bb0b22466dc12fa67c582a1c158eb9f5e148e012e6c8 extends Twig_Template
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
        // line 8
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 10
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "
  ";
        // line 11
        if (($this->getAttribute((isset($context["leaderboard__regions"]) ? $context["leaderboard__regions"] : null), "active", array()) == true)) {
            // line 12
            echo "  <div class=\"l-pr page__row pr-leaderboard\" id=\"leaderboard\">
    <div";
            // line 13
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["leaderboard__attributes"]) ? $context["leaderboard__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 14
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "leaderboard", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if (($this->getAttribute((isset($context["header__regions"]) ? $context["header__regions"] : null), "active", array()) == true)) {
            // line 19
            echo "  <header class=\"l-pr page__row pr-header\" id=\"masthead\" role=\"banner\">
    <div";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header__attributes"]) ? $context["header__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true);
            echo "
      ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true);
            echo "
    </div>
  </header>
  ";
        }
        // line 26
        echo "  ";
        if (($this->getAttribute((isset($context["navbar__regions"]) ? $context["navbar__regions"] : null), "active", array()) == true)) {
            // line 27
            echo "  <div class=\"l-pr page__row pr-navbar\" id=\"navbar\">
    <div";
            // line 28
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navbar__attributes"]) ? $context["navbar__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 29
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navbar", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 33
        echo "  ";
        if (($this->getAttribute((isset($context["messages__regions"]) ? $context["messages__regions"] : null), "active", array()) == true)) {
            // line 34
            echo "  <div class=\"l-pr page__row pr-messages\" id=\"messages\">
    <div";
            // line 35
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages__attributes"]) ? $context["messages__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 36
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 40
        echo "  ";
        if (($this->getAttribute((isset($context["highlighted__regions"]) ? $context["highlighted__regions"] : null), "active", array()) == true)) {
            // line 41
            echo "  <div class=\"l-pr page__row pr-highlighted\" id=\"highlighted\">
    <div";
            // line 42
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted__attributes"]) ? $context["highlighted__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 47
        echo "  ";
        if (($this->getAttribute((isset($context["features__regions"]) ? $context["features__regions"] : null), "active", array()) == true)) {
            // line 48
            echo "  <div class=\"l-pr page__row pr-features\" id=\"features\">
    <div";
            // line 49
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["features__attributes"]) ? $context["features__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 50
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_first", array()), "html", null, true);
            echo "
      ";
            // line 51
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_second", array()), "html", null, true);
            echo "
      ";
            // line 52
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_third", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 56
        echo "  ";
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            echo "<div class=\"pr-temporary-tabs l-pr\"><div class=\"l-rw regions\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "</div></div>";
        }
        // line 57
        echo "
";
        // line 58
        if (($this->getAttribute((isset($context["main__regions"]) ? $context["main__regions"] : null), "active", array()) == true)) {
            // line 59
            echo "  <div class=\"l-pr page__row pr-main\" id=\"main-content\">
    <div";
            // line 60
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main__attributes"]) ? $context["main__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 61
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
            echo "
      ";
            // line 62
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      ";
            // line 63
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 67
        echo "  ";
        if (($this->getAttribute((isset($context["subcontent__regions"]) ? $context["subcontent__regions"] : null), "active", array()) == true)) {
            // line 68
            echo "  <div class=\"l-pr page__row pr-subcontent\" id=\"subcontent\">
    <div";
            // line 69
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subcontent__attributes"]) ? $context["subcontent__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 70
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subcontent", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 74
        echo "  ";
        if (($this->getAttribute((isset($context["subfeatures__regions"]) ? $context["subfeatures__regions"] : null), "active", array()) == true)) {
            // line 75
            echo "  <div class=\"l-pr page__row pr-subfeatures\" id=\"sub-features\">
    <div";
            // line 76
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfeatures__attributes"]) ? $context["subfeatures__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 77
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_first", array()), "html", null, true);
            echo "
      ";
            // line 78
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_second", array()), "html", null, true);
            echo "
      ";
            // line 79
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_third", array()), "html", null, true);
            echo "
      ";
            // line 80
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_fourth", array()), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 84
        echo "  ";
        if (($this->getAttribute((isset($context["footer__regions"]) ? $context["footer__regions"] : null), "active", array()) == true)) {
            // line 85
            echo "  <footer class=\"l-pr page__row pr-footer\" id=\"footer\" role=\"contentinfo\">
    <div";
            // line 86
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer__attributes"]) ? $context["footer__attributes"] : null), "html", null, true);
            echo ">
      ";
            // line 87
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </div>
  </footer>
  ";
        }
        // line 91
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attribution"]) ? $context["attribution"] : null), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/pixture_reloaded/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 91,  232 => 87,  228 => 86,  225 => 85,  222 => 84,  215 => 80,  211 => 79,  207 => 78,  203 => 77,  199 => 76,  196 => 75,  193 => 74,  186 => 70,  182 => 69,  179 => 68,  176 => 67,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  154 => 59,  152 => 58,  149 => 57,  142 => 56,  135 => 52,  131 => 51,  127 => 50,  123 => 49,  120 => 48,  117 => 47,  110 => 43,  106 => 42,  103 => 41,  100 => 40,  93 => 36,  89 => 35,  86 => 34,  83 => 33,  76 => 29,  72 => 28,  69 => 27,  66 => 26,  59 => 22,  55 => 21,  51 => 20,  48 => 19,  45 => 18,  38 => 14,  34 => 13,  31 => 12,  29 => 11,  24 => 10,  19 => 8,);
    }
}
/* {#*/
/* /***/
/*  * site-builder for the page template.*/
/*  * Generated on: Sun, 25 Jan 15 09:54:44 +0100*/
/*  *//* */
/* #}*/
/* {# No template file found - template code programmatically generated. #}*/
/* <div{{ attributes }}>*/
/*   {# Remove messages variable when https://www.drupal.org/node/2289917 lands. #}*/
/*   {{ messages }}*/
/*   {% if leaderboard__regions.active == true %}*/
/*   <div class="l-pr page__row pr-leaderboard" id="leaderboard">*/
/*     <div{{ leaderboard__attributes }}>*/
/*       {{ page.leaderboard }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if header__regions.active == true %}*/
/*   <header class="l-pr page__row pr-header" id="masthead" role="banner">*/
/*     <div{{ header__attributes }}>*/
/*       {{ page.header_first }}*/
/*       {{ page.header_second }}*/
/*     </div>*/
/*   </header>*/
/*   {% endif %}*/
/*   {% if navbar__regions.active == true %}*/
/*   <div class="l-pr page__row pr-navbar" id="navbar">*/
/*     <div{{ navbar__attributes }}>*/
/*       {{ page.navbar }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if messages__regions.active == true %}*/
/*   <div class="l-pr page__row pr-messages" id="messages">*/
/*     <div{{ messages__attributes }}>*/
/*       {{ page.messages }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if highlighted__regions.active == true %}*/
/*   <div class="l-pr page__row pr-highlighted" id="highlighted">*/
/*     <div{{ highlighted__attributes }}>*/
/*       {{ page.highlighted }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if features__regions.active == true %}*/
/*   <div class="l-pr page__row pr-features" id="features">*/
/*     <div{{ features__attributes }}>*/
/*       {{ page.features_first }}*/
/*       {{ page.features_second }}*/
/*       {{ page.features_third }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if tabs %}<div class="pr-temporary-tabs l-pr"><div class="l-rw regions">{{ tabs }}</div></div>{% endif %}*/
/* */
/* {% if main__regions.active == true %}*/
/*   <div class="l-pr page__row pr-main" id="main-content">*/
/*     <div{{ main__attributes }}>*/
/*       {{ page.content }}*/
/*       {{ page.sidebar_first }}*/
/*       {{ page.sidebar_second }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if subcontent__regions.active == true %}*/
/*   <div class="l-pr page__row pr-subcontent" id="subcontent">*/
/*     <div{{ subcontent__attributes }}>*/
/*       {{ page.subcontent }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if subfeatures__regions.active == true %}*/
/*   <div class="l-pr page__row pr-subfeatures" id="sub-features">*/
/*     <div{{ subfeatures__attributes }}>*/
/*       {{ page.subfeatures_first }}*/
/*       {{ page.subfeatures_second }}*/
/*       {{ page.subfeatures_third }}*/
/*       {{ page.subfeatures_fourth }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if footer__regions.active == true %}*/
/*   <footer class="l-pr page__row pr-footer" id="footer" role="contentinfo">*/
/*     <div{{ footer__attributes }}>*/
/*       {{ page.footer }}*/
/*     </div>*/
/*   </footer>*/
/*   {% endif %}*/
/*   {{ attribution }}*/
/* </div>*/
