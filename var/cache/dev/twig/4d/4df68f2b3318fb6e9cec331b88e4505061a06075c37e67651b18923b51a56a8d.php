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

/* incidencia/index.html.twig */
class __TwigTemplate_c22d00bafd320d3dae3440aa2bc47c0eb8cc622de94285a0ac90439530d5bcec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incidencia/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incidencia/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "incidencia/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello IncidenciaController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link rel=\"stylesheet\" href=\"css/styles.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"main-section vh-100\">
    <div class=\"container-fluid vh-100\">
        <div class=\"row vh-100 align-items-center d-flex justify-content-center\">
            <div class=\"col-lg-10 col-md-10 col-sm-12 col-12 mr-auto ml-auto main-container\">
                <div class=\"card\">
                    <!-- Vista general de las pestaÃ±as -->
                    <div class=\"card-body\">
                        <div class=\"tabs tabs-style-iconbox\">
                            <nav class=\"top-navigation\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"nav-item col-6 text-center\">
                                        <a class=\"icon\"> 
                                            <i class=\"fas fa-list\"></i>
                                            <br/>
                                            <span>Incidencia</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item col-6 text-center\">
                                        <a class=\"icon\"> 
                                            <i class=\"fas fa-list\"></i>
                                            <br/>
                                            <span>Grupo analisis</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"col-12\">
                                <div class=\"content-wrap\" id=\"container_sections\">
                                    <section class=\"content-current\" id=\"incidenciasTab\">
                                        <h3>Formulario:</h3>
                                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"my-custom-class-for-errors\">
                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 47, $this->source); })()), 'errors');
        echo "
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), "idUsuario", [], "any", false, false, false, 52), 'row');
        echo "
                                                </div>
                                                <div class=\"col\" id=\"some-custom-id\">
                                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 55, $this->source); })()), "numeroIncidencia", [], "any", false, false, false, 55), 'row');
        echo "
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-check form-switch\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                                            </div>
                                            
                                        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "incidencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  168 => 55,  162 => 52,  154 => 47,  149 => 45,  113 => 11,  103 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello IncidenciaController!{% endblock %}

{% block stylesheets %}
    {{parent() }} 
    <link rel=\"stylesheet\" href=\"css/styles.css\">
    {% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"main-section vh-100\">
    <div class=\"container-fluid vh-100\">
        <div class=\"row vh-100 align-items-center d-flex justify-content-center\">
            <div class=\"col-lg-10 col-md-10 col-sm-12 col-12 mr-auto ml-auto main-container\">
                <div class=\"card\">
                    <!-- Vista general de las pestaÃ±as -->
                    <div class=\"card-body\">
                        <div class=\"tabs tabs-style-iconbox\">
                            <nav class=\"top-navigation\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"nav-item col-6 text-center\">
                                        <a class=\"icon\"> 
                                            <i class=\"fas fa-list\"></i>
                                            <br/>
                                            <span>Incidencia</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item col-6 text-center\">
                                        <a class=\"icon\"> 
                                            <i class=\"fas fa-list\"></i>
                                            <br/>
                                            <span>Grupo analisis</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"col-12\">
                                <div class=\"content-wrap\" id=\"container_sections\">
                                    <section class=\"content-current\" id=\"incidenciasTab\">
                                        <h3>Formulario:</h3>
                                        {{ form_start(formulario) }}
                                            <div class=\"my-custom-class-for-errors\">
                                                {{ form_errors(formulario) }}
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_row(formulario.idUsuario) }}
                                                </div>
                                                <div class=\"col\" id=\"some-custom-id\">
                                                    {{ form_row(formulario.numeroIncidencia) }}
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-check form-switch\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                                            </div>
                                            
                                        {{ form_end(formulario) }}
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "incidencia/index.html.twig", "/var/www/templates/incidencia/index.html.twig");
    }
}
