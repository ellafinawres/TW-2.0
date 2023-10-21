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

/* book/books.html.twig */
class __TwigTemplate_8c68320a864872ebf83fd17a40cb992d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/books.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/books.html.twig"));

        // line 1
        echo "<h1>List Books</h1>
";
        // line 2
        if (twig_test_empty((isset($context["tabBooks"]) || array_key_exists("tabBooks", $context) ? $context["tabBooks"] : (function () { throw new RuntimeError('Variable "tabBooks" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "<h1>No books found</h1>
";
        } else {
            // line 5
            echo "
  ";
            // line 6
            $context["published_Book"] = 0;
            // line 7
            $context["unpublished_Book"] = 0;
            // line 8
            echo "
<table border=\"1\" >
    <tr>
        <td>Ref</td>
        <td>Title</td>
        <td>Category</td>
        <td>Published</td>
        <td>PublicationDate</td>
        <td>Author</td>
        <td>Actions</td>
    </tr>

    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabBooks"]) || array_key_exists("tabBooks", $context) ? $context["tabBooks"] : (function () { throw new RuntimeError('Variable "tabBooks" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 21
                echo "
        ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, $context["book"], "published", [], "any", false, false, false, 22) == 1)) {
                    // line 23
                    echo "            ";
                    $context["published_Book"] = ((isset($context["published_Book"]) || array_key_exists("published_Book", $context) ? $context["published_Book"] : (function () { throw new RuntimeError('Variable "published_Book" does not exist.', 23, $this->source); })()) + 1);
                    // line 24
                    echo "        ";
                } else {
                    // line 25
                    echo "            ";
                    $context["unpublished_Book"] = ((isset($context["unpublished_Book"]) || array_key_exists("unpublished_Book", $context) ? $context["unpublished_Book"] : (function () { throw new RuntimeError('Variable "unpublished_Book" does not exist.', 25, $this->source); })()) + 1);
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "       <tr>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "ref", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "published", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "publicationDate", [], "any", false, false, false, 32)), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
           <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateBooks", ["ref" => twig_get_attribute($this->env, $this->source, $context["book"], "ref", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" >update</a>
               <a href= \"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteBook", ["ref" => twig_get_attribute($this->env, $this->source, $context["book"], "ref", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">delete</a>
               <a href= \"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showBook", ["ref" => twig_get_attribute($this->env, $this->source, $context["book"], "ref", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">show</a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
</table>
   ";
        }
        // line 43
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addbook");
        echo "\">Create new</a>
<h5>published_Books=";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["published_Book"]) || array_key_exists("published_Book", $context) ? $context["published_Book"] : (function () { throw new RuntimeError('Variable "published_Book" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</h5>
<h5>unpublished_Books=";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["unpublished_Book"]) || array_key_exists("unpublished_Book", $context) ? $context["unpublished_Book"] : (function () { throw new RuntimeError('Variable "unpublished_Book" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</h5>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "book/books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  149 => 44,  144 => 43,  139 => 40,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  77 => 21,  73 => 20,  59 => 8,  57 => 7,  55 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>List Books</h1>
{% if tabBooks is empty  %}
<h1>No books found</h1>
{% else %}

  {% set published_Book=0%}
{% set unpublished_Book=0 %}

<table border=\"1\" >
    <tr>
        <td>Ref</td>
        <td>Title</td>
        <td>Category</td>
        <td>Published</td>
        <td>PublicationDate</td>
        <td>Author</td>
        <td>Actions</td>
    </tr>

    {% for book in tabBooks %}

        {% if book.published ==1 %}
            {% set published_Book=published_Book+1%}
        {% else %}
            {% set unpublished_Book=unpublished_Book+1%}
        {% endif %}
       <tr>
            <td>{{book.ref}}</td>
            <td>{{book.title}}</td>
            <td>{{book.category}}</td>
            <td>{{book.published}}</td>
            <td>{{book.publicationDate|date}}</td>
            <td>{{book.author.username}}</td>
           <td><a href=\"{{ path(\"updateBooks\",{'ref':book.ref}) }}\" >update</a>
               <a href= \"{{ path('deleteBook',{'ref':book.ref}) }}\">delete</a>
               <a href= \"{{ path('showBook',{'ref':book.ref}) }}\">show</a>
            </td>
        </tr>
    {% endfor %}

</table>
   {% endif %}
<a href=\"{{ path('addbook') }}\">Create new</a>
<h5>published_Books={{ published_Book }}</h5>
<h5>unpublished_Books={{ unpublished_Book }}</h5>", "book/books.html.twig", "C:\\Users\\Nawres\\FirstProject\\templates\\book\\books.html.twig");
    }
}
