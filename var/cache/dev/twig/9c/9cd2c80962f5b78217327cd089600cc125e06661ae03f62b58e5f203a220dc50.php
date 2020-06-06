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
            'slide' => [$this, 'block_slide'],
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

    // line 5
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 6
        echo "<div class=\"carousel-inner\">
  <div class=\"carousel-item active\">
    <img class=\"d-block w-100\" src=\"/images/village/village1.jpg\" alt=\"First slide\">
    <div class=\"text-box text-center\">
      <h2 class=\"wow slideInRight\" >Bienvenue sur le site du Village</h2>
      
  </div>
  </div>
  <div class=\"carousel-item\">
    <img class=\"d-block w-100\" src=\"/images/village/village2.jpg\" alt=\"Second slide\">
  </div>
  <div class=\"carousel-item\">
    <img class=\"d-block w-100\" src=\"/images/village/village3.jpg\" alt=\"Third slide\">
  </div>
</div>
<a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
  <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
  <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Next</span>
</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Bienvenue au Village";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", [0 => "email"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "    <div class=\"flash-email bg-success text-center\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
<h2 class=\"text-center mt-5 mb-5\">Découvrez les Actus et Événements récentes:</h2>
<section class=\"container mb-5\">


      <!--Part Event Actu-->
        <div class=\"row\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 48
            echo "          <div class=\"col-md-6 d-flex justify-content-center\">
            <div class=\"card mb-4 ml-1 \">
              <img class=\"card-img-top\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["information"], "imageFile"), "thumb"), "html", null, true);
            echo "\"
                alt=\"Card image cap\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "titre", [], "any", false, false, false, 53), "html", null, true);
            echo "</h4>
                <p>Créé le ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "createdAt", [], "any", false, false, false, 54), "d/m/y"), "html", null, true);
            echo "</p>
                <p class=\"card-text text-truncate\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "libelle", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                <p class=\"card-text\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "date", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                
                <a class=\"btn btn-primary\"href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_info", ["id" => twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">En savoir plus</a>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>

</section>


<h1 class=\"text-center\">Météo du jour:</h1>
<section id=\"weathers\" class=\"container\">
  
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
        return array (  220 => 63,  209 => 58,  204 => 56,  200 => 55,  196 => 54,  192 => 53,  186 => 50,  182 => 48,  178 => 47,  169 => 40,  160 => 37,  157 => 36,  153 => 35,  143 => 34,  124 => 33,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block slide %}
<div class=\"carousel-inner\">
  <div class=\"carousel-item active\">
    <img class=\"d-block w-100\" src=\"/images/village/village1.jpg\" alt=\"First slide\">
    <div class=\"text-box text-center\">
      <h2 class=\"wow slideInRight\" >Bienvenue sur le site du Village</h2>
      
  </div>
  </div>
  <div class=\"carousel-item\">
    <img class=\"d-block w-100\" src=\"/images/village/village2.jpg\" alt=\"Second slide\">
  </div>
  <div class=\"carousel-item\">
    <img class=\"d-block w-100\" src=\"/images/village/village3.jpg\" alt=\"Third slide\">
  </div>
</div>
<a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
  <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
  <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Next</span>
</a>

{% endblock %}


{% block monTitre %}Bienvenue au Village{% endblock %}
{% block body %}
{% for message in app.flashes('email') %}
    <div class=\"flash-email bg-success text-center\">
        {{ message }}
    </div>
{% endfor %}

<h2 class=\"text-center mt-5 mb-5\">Découvrez les Actus et Événements récentes:</h2>
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
<section id=\"weathers\" class=\"container\">
  
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
{% endblock %}", "accueil/index.html.twig", "C:\\Users\\marcr\\Desktop\\symfony\\Village\\templates\\accueil\\index.html.twig");
    }
}
