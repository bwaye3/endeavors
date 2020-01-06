<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_kunco/templates/node/node--team.html.twig */
class __TwigTemplate_643608439736325626b0bacdc74f3e83e7250da7456624c0f98e7dd3263ec0e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 14];
        $filters = ["clean_class" => 4, "escape" => 15, "e" => 19, "t" => 59, "without" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'e', 't', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
<div";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-block\">
    <div class=\"team-image\">";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "</div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"socials-team\">
        ";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 23
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a>
        ";
            }
            // line 24
            echo " 
        ";
            // line 25
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])) {
                // line 26
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
        ";
            }
            // line 27
            echo " 
        ";
            // line 28
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 29
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-pinterest\"></i></a>
        ";
            }
            // line 30
            echo " 
        ";
            // line 31
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 32
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a>
        ";
            }
            // line 33
            echo " 
      </div>
    </div>
  </div>
</div>  

<!-- End Display article for teaser page -->
";
        } else {
            // line 41
            echo "<!-- Start Display article for detail page -->

<article";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "addClass", [0 => "node-detail"], "method")), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</div>
      <div class=\"job\">";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_description", [])), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_contact", [])), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 62
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 63
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a>
              ";
            }
            // line 64
            echo " 
              ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])) {
                // line 66
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
              ";
            }
            // line 67
            echo " 
              ";
            // line 68
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 69
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-pinterest\"></i></a>
              ";
            }
            // line 70
            echo " 
              ";
            // line 71
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 72
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a>
              ";
            }
            // line 73
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_education", [])), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
      ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_team_name", "field_team_contact", "field_team_skills", "field_team_image", "field_team_contact", "field_team_quote", "field_team_facebook", "field_team_linkedin", "field_team_pinterest", "field_team_twitter", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", [])), "html", null, true);
            echo " </div>

    ";
            // line 90
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 91
                echo "      <div id=\"node-single-comment\">
        ";
                // line 92
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 94
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 101
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 101,  272 => 94,  266 => 92,  263 => 91,  261 => 90,  256 => 88,  250 => 85,  246 => 84,  237 => 78,  233 => 77,  227 => 73,  221 => 72,  219 => 71,  216 => 70,  210 => 69,  208 => 68,  205 => 67,  199 => 66,  197 => 65,  194 => 64,  188 => 63,  186 => 62,  181 => 60,  177 => 59,  170 => 55,  163 => 51,  157 => 48,  153 => 47,  146 => 43,  142 => 41,  132 => 33,  126 => 32,  124 => 31,  121 => 30,  115 => 29,  113 => 28,  110 => 27,  104 => 26,  102 => 25,  99 => 24,  93 => 23,  91 => 22,  86 => 20,  80 => 19,  75 => 17,  70 => 15,  66 => 14,  62 => 12,  60 => 8,  59 => 7,  58 => 6,  57 => 5,  56 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/node/node--team.html.twig", "/Users/bwaye3/Documents/sites/local.chattanooga.com/themes/gavias_kunco/templates/node/node--team.html.twig");
    }
}
