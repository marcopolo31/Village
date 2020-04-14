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

/* admin/adminInfo.html.twig */
class __TwigTemplate_caa9c066327e948147295c1bcbf5ed49b36b55c5bd3fde61709e0f1f620fbebd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminInfo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminInfo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminInfo.html.twig", 1);
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

        echo "Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Liste des Evénements et des Actualités";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "    <div class=\"alert alert-success\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"container d-flex justify-content-center mb-5 mt-5\">
    <a class=\"btn btn-success w-100\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creationInfo");
        echo "\">Ajouter</a>
</div>
<div class=\"container \">
    <div class=\"row\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 19
            echo "        <div class=\"col-6 mb-5  d-flex justify-content-center\">
            <div class=\"row text-center\">
                <div class=\"card\">
                    <img class=\"card-img-top\"
                        src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["information"], "imageFile"), "thumb"), "html", null, true);
            echo "\"
                        alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                        <p class=\"card-text text-truncate\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "libelle", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                        <div class=\"row no-gutters\">
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"
                                class=\"col btn btn-primary\">Modifier</a>
                            <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supInfo", ["id" => twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" method=\"POST\" class=\"col\"
                                onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 34))), "html", null, true);
            echo "\">
                                <input type=\"submit\" class=\"btn btn-danger w-100\" value=\"supprimer\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
</div>
<div>
<div class=\"d-flex justify-content-center\">
<div class=\"navigation\">
    ";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 48, $this->source); })()));
        echo "
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 48,  185 => 43,  170 => 34,  164 => 31,  159 => 29,  154 => 27,  150 => 26,  144 => 23,  138 => 19,  134 => 18,  127 => 14,  124 => 13,  115 => 10,  112 => 9,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}

{% block monTitre %}Liste des Evénements et des Actualités{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{message}}
    </div>
{% endfor %}
<div class=\"container d-flex justify-content-center mb-5 mt-5\">
    <a class=\"btn btn-success w-100\" href=\"{{path('creationInfo')}}\">Ajouter</a>
</div>
<div class=\"container \">
    <div class=\"row\">
        {% for information in informations %}
        <div class=\"col-6 mb-5  d-flex justify-content-center\">
            <div class=\"row text-center\">
                <div class=\"card\">
                    <img class=\"card-img-top\"
                        src=\"{{vich_uploader_asset(information,'imageFile')|imagine_filter('thumb')}}\"
                        alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{information.titre}}</h5>
                        <p class=\"card-text text-truncate\">{{ information.libelle }}</p>
                        <div class=\"row no-gutters\">
                            <a href=\"{{path('admin_modif', {'id' : information.id})}}\"
                                class=\"col btn btn-primary\">Modifier</a>
                            <form action=\"{{path('supInfo', {'id' : information.id})}}\" method=\"POST\" class=\"col\"
                                onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ information.id)}}\">
                                <input type=\"submit\" class=\"btn btn-danger w-100\" value=\"supprimer\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
<div>
<div class=\"d-flex justify-content-center\">
<div class=\"navigation\">
    {{ knp_pagination_render(informations) }}
</div>
</div>

{% endblock %}", "admin/adminInfo.html.twig", "C:\\Users\\marcr\\Desktop\\symfony\\Village\\templates\\admin\\adminInfo.html.twig");
    }
}
