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

/* accueil/index.html.twig */
class __TwigTemplate_e28c37229b0180baafc9a580d58b4caba13891b32f5305eb3fb9c66780635ea6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "email"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"flash-email bg-success text-center\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<div class=\"container mb-4 mt-4 ctn-txt\">
  <h2 class=\"text-center mt-5 mb-5\">Découvrez les 4 dernières Actus et Événements:</h2>
  <section class=\"container mb-5\">
  
  
        <!--Part Event Actu-->
          <div class=\"row\">
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 22
            echo "            <div class=\"col-md-6 d-flex justify-content-center\">
              <div class=\"card mb-4 ml-1 \">
                <img class=\"card-img-top\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["information"], "imageFile"), "thumb"), "html", null, true);
            echo "\"
                  alt=\"Card image cap\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
                  <p>Créé le ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "createdAt", [], "any", false, false, false, 28), "d/m/y"), "html", null, true);
            echo "</p>
                  <p class=\"card-text text-truncate\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "libelle", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                  <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "date", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                  
                  <a class=\"btn btn-primary\"href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_info", ["id" => twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">En savoir plus</a>
                </div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </div>
  
  </section>
  
  
  <h1 class=\"text-center\">Météo du jour:</h1>
  <section id=\"weathers\" class=\"container \">
    
    <h1>
      Village
    </h1>
    <i class=\"wi\"></i>
    <h2>
      <span class=\"weatherDescription\"></span>
    </h2>
    <h2>
      <span class=\"weather\"></span> C°
    </h2>
  </section>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  144 => 32,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  121 => 24,  117 => 22,  113 => 21,  104 => 14,  95 => 11,  92 => 10,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}




{% block body %}
{% for message in app.flashes('email') %}
    <div class=\"flash-email bg-success text-center\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"container mb-4 mt-4 ctn-txt\">
  <h2 class=\"text-center mt-5 mb-5\">Découvrez les 4 dernières Actus et Événements:</h2>
  <section class=\"container mb-5\">
  
  
        <!--Part Event Actu-->
          <div class=\"row\">
          {% for information in informations %}
            <div class=\"col-md-6 d-flex justify-content-center\">
              <div class=\"card mb-4 ml-1 \">
                <img class=\"card-img-top\" src=\"{{vich_uploader_asset(information,'imageFile')|imagine_filter('thumb')}}\"
                  alt=\"Card image cap\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">{{information.titre}}</h4>
                  <p>Créé le {{ information.createdAt|date('d/m/y')}}</p>
                  <p class=\"card-text text-truncate\">{{information.libelle}}</p>
                  <p class=\"card-text\">{{information.date}}</p>
                  
                  <a class=\"btn btn-primary\"href=\"{{path('afficher_info', {'id' : information.id})}}\">En savoir plus</a>
                </div>
              </div>
            </div>
            {% endfor %}
      </div>
  
  </section>
  
  
  <h1 class=\"text-center\">Météo du jour:</h1>
  <section id=\"weathers\" class=\"container \">
    
    <h1>
      Village
    </h1>
    <i class=\"wi\"></i>
    <h2>
      <span class=\"weatherDescription\"></span>
    </h2>
    <h2>
      <span class=\"weather\"></span> C°
    </h2>
  </section>

</div>

{% endblock %}

", "accueil/index.html.twig", "C:\\Users\\marcr\\Desktop\\symfony\\Village\\templates\\accueil\\index.html.twig");
    }
}
