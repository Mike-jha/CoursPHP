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

/* Article/_form.html.twig */
class __TwigTemplate_bdbaaca476a6873545bc7449f6f2c4f8274623c91ddf48a53447216b75523b60 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"form-group\">
    <label for=\"title\" >Titre</label>
    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "\" />
</div>
<div class=\"form-group\">
    <label for=\"content\" >Contenu</label>
    <textarea name=\"content\" id=\"content\" class=\"form-control\" >";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "content", [], "any", false, false, false, 7), "html", null, true);
        echo "</textarea>
</div>
<input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "Article/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <label for=\"title\" >Titre</label>
    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"{{ entity.title }}\" />
</div>
<div class=\"form-group\">
    <label for=\"content\" >Contenu</label>
    <textarea name=\"content\" id=\"content\" class=\"form-control\" >{{ entity.content }}</textarea>
</div>
<input type=\"hidden\" name=\"id\" value=\"{{ entity.id }}\" />", "Article/_form.html.twig", "/Applications/MAMP/htdocs/CoursPHP/MVCExemple/src/View/Article/_form.html.twig");
    }
}
