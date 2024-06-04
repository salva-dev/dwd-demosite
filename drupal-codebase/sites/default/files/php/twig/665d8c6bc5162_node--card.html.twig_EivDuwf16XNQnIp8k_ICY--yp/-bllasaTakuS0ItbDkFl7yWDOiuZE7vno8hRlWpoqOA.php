<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig */
class __TwigTemplate_d393cf81052b0222257b135299f88e4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : (""))];
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("umami/classy.node"), "html", null, true);
        echo "

";
        // line 81
        ob_start(function () { return ''; });
        // line 82
        echo t("View @node.type.entity.label", array("@node.type.entity.label" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "type", [], "any", false, false, true, 82), "entity", [], "any", false, false, true, 82), "label", [], "method", false, false, true, 82), ));
        $context["read_more"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "
";
        // line 85
        $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", 85, "655980429")->display(twig_to_array(["attributes" => twig_get_attribute($this->env, $this->source,         // line 86
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 86), "content" =>         // line 87
($context["content"] ?? null), "content_attributes" =>         // line 88
($context["content_attributes"] ?? null), "label" =>         // line 89
($context["label"] ?? null), "title_attributes" =>         // line 90
($context["title_attributes"] ?? null), "title_prefix" =>         // line 91
($context["title_prefix"] ?? null), "title_suffix" =>         // line 92
($context["title_suffix"] ?? null), "read_more" =>         // line 93
($context["read_more"] ?? null), "url" =>         // line 94
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "content_attributes", "label", "title_attributes", "title_prefix", "title_suffix", "url"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  68 => 94,  67 => 93,  66 => 92,  65 => 91,  64 => 90,  63 => 89,  62 => 88,  61 => 87,  60 => 86,  59 => 85,  56 => 84,  53 => 82,  51 => 81,  46 => 79,  44 => 76,  43 => 75,  42 => 74,  41 => 73,  40 => 72,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "trans" => 82, "embed" => 85);
        static $filters = array("clean_class" => 72, "escape" => 79);
        static $functions = array("attach_library" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'embed'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}


/* core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig */
class __TwigTemplate_d393cf81052b0222257b135299f88e4d___655980429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 85
        return "umami:card";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:card", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", 85);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_attributes", "label", "title_prefix", "title_suffix", "content_attributes", "content", "url", "read_more"]);    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "    ";
        $this->loadTemplate("umami:title", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", 97)->display(twig_to_array(["attributes" => twig_get_attribute($this->env, $this->source,         // line 98
($context["title_attributes"] ?? null), "addClass", ["umami-card__title"], "method", false, false, true, 98), "label" =>         // line 99
($context["label"] ?? null), "title_prefix" =>         // line 100
($context["title_prefix"] ?? null), "title_suffix" =>         // line 101
($context["title_suffix"] ?? null)]));
        // line 103
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["umami-card__content"], "method", false, false, true, 103), 103, $this->source), "html", null, true);
        echo ">
      ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 104, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 106
        $this->loadTemplate("umami:read-more", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", 106)->display(twig_to_array(["url" =>         // line 107
($context["url"] ?? null), "text" =>         // line 108
($context["read_more"] ?? null), "a11y" =>         // line 109
($context["label"] ?? null), "extra_classes" => "umami-card__read-more"]));
        // line 112
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  191 => 112,  189 => 109,  188 => 108,  187 => 107,  186 => 106,  181 => 104,  176 => 103,  174 => 101,  173 => 100,  172 => 99,  171 => 98,  169 => 97,  165 => 96,  153 => 85,  68 => 94,  67 => 93,  66 => 92,  65 => 91,  64 => 90,  63 => 89,  62 => 88,  61 => 87,  60 => 86,  59 => 85,  56 => 84,  53 => 82,  51 => 81,  46 => 79,  44 => 76,  43 => 75,  42 => 74,  41 => 73,  40 => 72,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/templates/content/node--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 97);
        static $filters = array("escape" => 103);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
