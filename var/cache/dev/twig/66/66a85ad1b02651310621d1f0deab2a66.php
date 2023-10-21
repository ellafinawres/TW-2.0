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

/* author/list.html.twig */
class __TwigTemplate_0a90e45997ed3b87fc520edfc3539ff0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        echo "<h1>List Authors</h1>
";
        // line 2
        $context["x"] = 0;
        // line 3
        if (twig_test_empty((isset($context["tabAuthors"]) || array_key_exists("tabAuthors", $context) ? $context["tabAuthors"] : (function () { throw new RuntimeError('Variable "tabAuthors" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <h1>tableau vide</h1>
 ";
        } else {
            // line 6
            echo "<table border=\"1\" >
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Books</td>
        <td>Picture</td>
        <td>Action</td>
    </tr>

    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabAuthors"]) || array_key_exists("tabAuthors", $context) ? $context["tabAuthors"] : (function () { throw new RuntimeError('Variable "tabAuthors" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 17
                echo "        <tr>
            <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 19)), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
            <td> ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td><img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 22)), "html", null, true);
                echo "\" alt=\"author\" height=\"100px\" width=\"100px\"></td>
            <td><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_author", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">details</a></td>
        </tr>
        ";
                // line 25
                $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 25, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 25));
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "</table>
NBr Authors :";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tabAuthors"]) || array_key_exists("tabAuthors", $context) ? $context["tabAuthors"] : (function () { throw new RuntimeError('Variable "tabAuthors" does not exist.', 29, $this->source); })())), "html", null, true);
        echo " <br>
NBr Authors :";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " <br>
<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/a11.png"), "html", null, true);
        echo "\" alt=\"symfonyimage\" height=\"170px\" width=\"170px\">";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  116 => 30,  112 => 29,  109 => 28,  106 => 27,  100 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  70 => 17,  66 => 16,  54 => 6,  50 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>List Authors</h1>
{% set x=0 %}
{% if tabAuthors is empty  %}
    <h1>tableau vide</h1>
 {% else %}
<table border=\"1\" >
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Books</td>
        <td>Picture</td>
        <td>Action</td>
    </tr>

    {% for author in tabAuthors %}
        <tr>
            <td>{{author.id}}</td>
            <td>{{author.username|upper}}</td>
            <td>{{author.email}}</td>
            <td> {{author.nb_books}}</td>
            <td><img src=\"{{ asset(author.picture) }}\" alt=\"author\" height=\"100px\" width=\"100px\"></td>
            <td><a href=\"{{ path('details_author',{'id': author.id}) }}\">details</a></td>
        </tr>
        {% set x=x+author.nb_books %}
    {% endfor %}
    {% endif %}
</table>
NBr Authors :{{ tabAuthors|length }} <br>
NBr Authors :{{ x }} <br>
<img src=\"{{ asset('image/a11.png') }}\" alt=\"symfonyimage\" height=\"170px\" width=\"170px\">", "author/list.html.twig", "C:\\Users\\Nawres\\FirstProject\\templates\\author\\list.html.twig");
    }
}
