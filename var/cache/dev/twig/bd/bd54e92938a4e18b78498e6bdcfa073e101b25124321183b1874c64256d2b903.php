<?php

/* articles/index.html.twig */
class __TwigTemplate_bc487c98690657f2a408d9ea3683ba1aef01768912107317a483ff0931ca95a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SymphArt Articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Articles</h1>

    ";
        // line 8
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <table id=\"articles\" class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Article Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 18
                echo "                    <tr>
                        <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"/article/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show</a>
                            <a href=\"/article/edit/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-light\">Edit</a>
                            <a href=\"#\" class=\"btn btn-danger delete-article\" data-id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>No articles to display</p>
    ";
        }
        // line 32
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"/js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  121 => 35,  113 => 32,  109 => 30,  104 => 27,  94 => 23,  90 => 22,  86 => 21,  81 => 19,  78 => 18,  74 => 17,  64 => 9,  62 => 8,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}SymphArt Articles{% endblock %}

{% block body %}
    <h1>Articles</h1>

    {% if articles %}
        <table id=\"articles\" class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Article Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for article in articles %}
                    <tr>
                        <td>{{article.title}}</td>
                        <td>
                            <a href=\"/article/{{ article.id }}\" class=\"btn btn-dark\">Show</a>
                            <a href=\"/article/edit/{{ article.id }}\" class=\"btn btn-light\">Edit</a>
                            <a href=\"#\" class=\"btn btn-danger delete-article\" data-id=\"{{ article.id }}\">Delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No articles to display</p>
    {% endif %}

{% endblock %}

{% block javascripts %}
    <script src=\"/js/main.js\"></script>
{% endblock %}", "articles/index.html.twig", "C:\\xampp\\htdocs\\SymphArt_2\\templates\\articles\\index.html.twig");
    }
}
