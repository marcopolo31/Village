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

/* base.html.twig */
class __TwigTemplate_bea3937d5f5a12f0ea971a3523286750403cd7f3caa8683c4d710eb3c6141e35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'slide' => [$this, 'block_slide'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Mairie</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active \">
          <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><i class=\"fas fa-home\"></i> Accueil</a>
        </li>

        ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_categorie", ["id" => 13]);
            echo "\"><i class=\"far fa-calendar-alt\"></i> Evenements</a>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_categorie", ["id" => 14]);
            echo "\"><i class=\"far fa-newspaper\"></i> Actualités</a>
        </li>
        ";
        } else {
            // line 37
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\"><i class=\"fas fa-user-lock\"></i> Admin</a>
        </li>
        ";
        }
        // line 41
        echo "
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire");
        echo "\"><i class=\"fas fa-history\"></i> Histoire</a>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"fas fa-address-book\"></i> Contact</a>
        </li>

        ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i> Login</a>
        </li>
        ";
        } else {
            // line 54
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
        </li>
        ";
        }
        // line 58
        echo "
        ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">inscription</a>
        </li>
        ";
        }
        // line 64
        echo "
      </ul>
    </div>
  </nav>
  
  <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    ";
        // line 70
        $this->displayBlock('slide', $context, $blocks);
        // line 72
        echo "  </div>

  <div class=\"d-flex justify-content-center\">
  <h1 class=\"border border-dark rounded p-2 m-2 bg-dark text-white text-center w-50\">";
        // line 75
        $this->displayBlock('monTitre', $context, $blocks);
        echo "</h1>
</div>
  ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "  <footer class=\"page-footer font-small blue pt-4 text-white bg-dark\">
    <div class=\"container-fluid text-center \">

      <!-- Grid row -->
      <div class=\"row\">

        <!-- Grid column -->
        <div class=\"container-fluid text-center text-md-left\">

          <!-- Grid row -->
          <div class=\"row\">

            <!-- Grid column -->
            <div class=\"col-md-6 mt-md-0 mt-3\">

              <!-- Content -->
              <h5 class=\"text-uppercase font-weight-bold\">Contact</h5>
              <ul style=\"list-style-type: none;\">
                <li>Mairie du Village</li>
                <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"fas fa-map-marked-alt\"></i></a> 14 rue de la liberté</li>
                <li>57310</li>
                <li>VILLAGE</li>
                <li><i class=\"fas fa-phone-alt\"></i> 0011223344</li>
                <li><i class=\"fas fa-fax\"></i> 0011223355</li>
                <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                <li><i class=\"fas fa-envelope-square\"></i> Example.info@gmal.com</li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-6 mb-md-0 mb-3\">

              <!-- Content -->
              <h5 class=\"text-uppercase font-weight-bold\">Horaire d'ouverture</h5>
              <p>Du lundi au vendredi, de 8h30 à 12h30 et de 13h30 à 17h30.
                Le samedi de 9h à 12h.
                Le service urbanisme vous accueille sans rdv du lundi au vendredi de 9h à 12h et uniquement sur rdv de
                13h30 à 16h30</p>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Grid row -->

      </div>
      <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
        <a href=\"\"> Marcdev.com</a>
      </div>
  </footer>
  ";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
    integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slide"));

        // line 71
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "  
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "  ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
    integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 138,  367 => 137,  356 => 78,  346 => 77,  328 => 75,  318 => 71,  308 => 70,  291 => 8,  281 => 7,  262 => 6,  250 => 149,  248 => 137,  212 => 104,  204 => 99,  183 => 80,  181 => 77,  176 => 75,  171 => 72,  169 => 70,  161 => 64,  155 => 61,  152 => 60,  150 => 59,  147 => 58,  141 => 55,  138 => 54,  132 => 51,  129 => 50,  127 => 49,  121 => 46,  115 => 43,  111 => 41,  105 => 38,  102 => 37,  96 => 34,  90 => 31,  87 => 30,  85 => 29,  79 => 26,  68 => 18,  62 => 14,  60 => 7,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  {% block stylesheets %}
  {{ encore_entry_link_tags('app')}}
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
    integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand\" href=\"{{path('accueil')}}\">Mairie</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active \">
          <a class=\"nav-link\" href=\"{{path('accueil')}}\"><i class=\"fas fa-home\"></i> Accueil</a>
        </li>

        {% if not app.user %}
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"{{path('afficher_categorie', {id : 13})}}\"><i class=\"far fa-calendar-alt\"></i> Evenements</a>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"{{path('afficher_categorie', {id : 14})}}\"><i class=\"far fa-newspaper\"></i> Actualités</a>
        </li>
        {% else %}
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"{{path('admin')}}\"><i class=\"fas fa-user-lock\"></i> Admin</a>
        </li>
        {% endif %}

        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"{{path('histoire')}}\"><i class=\"fas fa-history\"></i> Histoire</a>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"{{path('contact')}}\"><i class=\"fas fa-address-book\"></i> Contact</a>
        </li>

        {% if not app.user %}
        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"{{path('login')}}\"><i class=\"fas fa-sign-in-alt\"></i> Login</a>
        </li>
        {% else %}
        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"{{path('logout')}}\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
        </li>
        {% endif %}

        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item active\">
          <a class=\"nav-link \" href=\"{{path('inscription')}}\">inscription</a>
        </li>
        {% endif %}

      </ul>
    </div>
  </nav>
  
  <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    {% block slide %}
    {% endblock %}
  </div>

  <div class=\"d-flex justify-content-center\">
  <h1 class=\"border border-dark rounded p-2 m-2 bg-dark text-white text-center w-50\">{% block monTitre %}{% endblock %}</h1>
</div>
  {% block body %}
  
  {% endblock %}
  <footer class=\"page-footer font-small blue pt-4 text-white bg-dark\">
    <div class=\"container-fluid text-center \">

      <!-- Grid row -->
      <div class=\"row\">

        <!-- Grid column -->
        <div class=\"container-fluid text-center text-md-left\">

          <!-- Grid row -->
          <div class=\"row\">

            <!-- Grid column -->
            <div class=\"col-md-6 mt-md-0 mt-3\">

              <!-- Content -->
              <h5 class=\"text-uppercase font-weight-bold\">Contact</h5>
              <ul style=\"list-style-type: none;\">
                <li>Mairie du Village</li>
                <li><a href=\"{{path('contact')}}\"><i class=\"fas fa-map-marked-alt\"></i></a> 14 rue de la liberté</li>
                <li>57310</li>
                <li>VILLAGE</li>
                <li><i class=\"fas fa-phone-alt\"></i> 0011223344</li>
                <li><i class=\"fas fa-fax\"></i> 0011223355</li>
                <li><a href=\"{{path('contact')}}\">Contact</a></li>
                <li><i class=\"fas fa-envelope-square\"></i> Example.info@gmal.com</li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class=\"clearfix w-100 d-md-none pb-3\">

            <!-- Grid column -->
            <div class=\"col-md-6 mb-md-0 mb-3\">

              <!-- Content -->
              <h5 class=\"text-uppercase font-weight-bold\">Horaire d'ouverture</h5>
              <p>Du lundi au vendredi, de 8h30 à 12h30 et de 13h30 à 17h30.
                Le samedi de 9h à 12h.
                Le service urbanisme vous accueille sans rdv du lundi au vendredi de 9h à 12h et uniquement sur rdv de
                13h30 à 16h30</p>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Grid row -->

      </div>
      <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
        <a href=\"\"> Marcdev.com</a>
      </div>
  </footer>
  {% block javascripts %}
  {{ encore_entry_script_tags('app')}}
  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
    integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
  </script>
  {% endblock %}
</body>

</html>", "base.html.twig", "C:\\Users\\marcr\\Desktop\\symfony\\Village\\templates\\base.html.twig");
    }
}
