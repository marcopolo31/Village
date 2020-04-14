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

/* histoire/histoire.html.twig */
class __TwigTemplate_91e952b44a79410d047552d9ff5465c5e44f2b053c4824f01a372fbc68b7e64c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/histoire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/histoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "histoire/histoire.html.twig", 1);
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

        echo "Histoire";
        
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

        echo "Histoire du Village";
        
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
        echo "<section class=\"container text-justify\">
    <h2>L'origine du Village</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, quibusdam laborum! Cum et maiores nesciunt
        temporibus quae, magni, ut tenetur optio harum dolorum tempore reprehenderit esse facilis pariatur non
        blanditiis?
        <img src=\"images/histoire/histoire2.jpg\" alt=\"histoire\" class=\"imgHisto\">
        Quam inventore a, repudiandae cupiditate sint labore? Ex culpa suscipit nulla unde minima laudantium aliquam
        adipisci! Vel, architecto tenetur est illo maxime cumque, recusandae ducimus neque sapiente dolore, consequuntur
        saepe.
        Dolorum nesciunt excepturi placeat, harum magni ullam dolore expedita similique accusamus quis molestias,
        nostrum maxime repellat asperiores rem, distinctio vitae quo minus impedit consequatur qui perspiciatis vel. In,
        commodi minus.
        Amet ipsum aspernatur obcaecati, laborum praesentium ipsa quas blanditiis dignissimos minus dolores natus.
        Dolorem quaerat id asperiores quo at numquam perspiciatis cum, inventore, earum et autem provident culpa neque
        ipsam!
        Impedit aut magni, voluptatem delectus deleniti ex accusamus quisquam! Eligendi porro nesciunt non perspiciatis
        tempora inventore? Ipsam, quam deleniti tempore, alias nihil officia veniam repudiandae similique, magnam quod
        doloribus molestias!
        Rerum error odio voluptatum dignissimos numquam eaque ipsum, blanditiis perferendis earum voluptate modi ratione
        porro assumenda maiores repudiandae accusantium iste laudantium, asperiores nostrum consequatur minus eum
        praesentium neque? Laudantium, eveniet.
    </p>

    <h2>Patrimoine du Village</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, nam sapiente! Architecto odit mollitia
        impedit ea minus ipsum, natus doloribus tempore autem voluptatibus excepturi, quam cumque inventore! Odit, modi
        repellendus?
        Temporibus, ducimus eveniet praesentium maiores possimus voluptatem a aperiam minus iusto tempora laudantium
        beatae vel consectetur tempore voluptas asperiores omnis, nobis soluta animi repellendus. Dolore quae ducimus
        nulla optio consectetur.
        <img src=\"images/histoire/histoire.jpg\" alt=\"histoire\" class=\"imgHisto1\">
        Perspiciatis molestias consectetur consequatur, libero soluta repellat facilis vel temporibus eaque inventore
        labore reprehenderit! Omnis laboriosam accusantium beatae expedita adipisci ullam hic, ipsum a ea amet vel
        consectetur quas aspernatur.
        Voluptates, veniam. Ipsa iusto error hic consequatur odio, illum eveniet, sunt quod deleniti culpa assumenda
        amet, tempora quas. Maiores voluptates nulla obcaecati illo perspiciatis harum earum natus magni sequi commodi?
        Aperiam incidunt exercitationem, eligendi omnis quod iure illum distinctio dolore cum sequi reprehenderit,
        veritatis consequuntur vitae animi maxime et quis odit architecto soluta? At, ab enim harum perferendis aliquam
        mollitia?
        Error, minima. Fugiat unde ducimus cum est rerum recusandae cupiditate fugit repellat eius? Voluptas quas,
        repellendus eius officiis temporibus saepe, doloremque consequatur nulla deleniti amet, eaque exercitationem
        dolore quibusdam dignissimos.
    </p>

    <h2>Faits Historique</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab autem molestias, saepe aspernatur eveniet doloribus
        aliquid nemo praesentium quia animi earum, fuga porro quam explicabo adipisci sit illum laborum veritatis.
        Rerum est ipsa, rem illum deleniti natus cumque alias doloremque sed totam, quod repellendus excepturi
        perferendis officia! Minima, quis. Velit dicta modi possimus rerum, incidunt libero laboriosam delectus aliquam
        nesciunt.
        Voluptatum deleniti magni adipisci eaque unde fuga repudiandae obcaecati inventore expedita velit cum quas
        necessitatibus minima odio illo accusamus possimus, nesciunt sint ipsa facere porro ipsam sunt similique sed!
        Cum.
        Molestias debitis modi vitae excepturi obcaecati? Nemo modi et officiis doloremque. Sapiente quidem, accusamus
        commodi magni nam distinctio, eos numquam optio modi explicabo
        ducimus perspiciatis porro facilis. Expedita, voluptates architecto!</p>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "histoire/histoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Histoire{% endblock %}

{% block monTitre %}Histoire du Village{% endblock %}

{% block body %}
<section class=\"container text-justify\">
    <h2>L'origine du Village</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, quibusdam laborum! Cum et maiores nesciunt
        temporibus quae, magni, ut tenetur optio harum dolorum tempore reprehenderit esse facilis pariatur non
        blanditiis?
        <img src=\"images/histoire/histoire2.jpg\" alt=\"histoire\" class=\"imgHisto\">
        Quam inventore a, repudiandae cupiditate sint labore? Ex culpa suscipit nulla unde minima laudantium aliquam
        adipisci! Vel, architecto tenetur est illo maxime cumque, recusandae ducimus neque sapiente dolore, consequuntur
        saepe.
        Dolorum nesciunt excepturi placeat, harum magni ullam dolore expedita similique accusamus quis molestias,
        nostrum maxime repellat asperiores rem, distinctio vitae quo minus impedit consequatur qui perspiciatis vel. In,
        commodi minus.
        Amet ipsum aspernatur obcaecati, laborum praesentium ipsa quas blanditiis dignissimos minus dolores natus.
        Dolorem quaerat id asperiores quo at numquam perspiciatis cum, inventore, earum et autem provident culpa neque
        ipsam!
        Impedit aut magni, voluptatem delectus deleniti ex accusamus quisquam! Eligendi porro nesciunt non perspiciatis
        tempora inventore? Ipsam, quam deleniti tempore, alias nihil officia veniam repudiandae similique, magnam quod
        doloribus molestias!
        Rerum error odio voluptatum dignissimos numquam eaque ipsum, blanditiis perferendis earum voluptate modi ratione
        porro assumenda maiores repudiandae accusantium iste laudantium, asperiores nostrum consequatur minus eum
        praesentium neque? Laudantium, eveniet.
    </p>

    <h2>Patrimoine du Village</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, nam sapiente! Architecto odit mollitia
        impedit ea minus ipsum, natus doloribus tempore autem voluptatibus excepturi, quam cumque inventore! Odit, modi
        repellendus?
        Temporibus, ducimus eveniet praesentium maiores possimus voluptatem a aperiam minus iusto tempora laudantium
        beatae vel consectetur tempore voluptas asperiores omnis, nobis soluta animi repellendus. Dolore quae ducimus
        nulla optio consectetur.
        <img src=\"images/histoire/histoire.jpg\" alt=\"histoire\" class=\"imgHisto1\">
        Perspiciatis molestias consectetur consequatur, libero soluta repellat facilis vel temporibus eaque inventore
        labore reprehenderit! Omnis laboriosam accusantium beatae expedita adipisci ullam hic, ipsum a ea amet vel
        consectetur quas aspernatur.
        Voluptates, veniam. Ipsa iusto error hic consequatur odio, illum eveniet, sunt quod deleniti culpa assumenda
        amet, tempora quas. Maiores voluptates nulla obcaecati illo perspiciatis harum earum natus magni sequi commodi?
        Aperiam incidunt exercitationem, eligendi omnis quod iure illum distinctio dolore cum sequi reprehenderit,
        veritatis consequuntur vitae animi maxime et quis odit architecto soluta? At, ab enim harum perferendis aliquam
        mollitia?
        Error, minima. Fugiat unde ducimus cum est rerum recusandae cupiditate fugit repellat eius? Voluptas quas,
        repellendus eius officiis temporibus saepe, doloremque consequatur nulla deleniti amet, eaque exercitationem
        dolore quibusdam dignissimos.
    </p>

    <h2>Faits Historique</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab autem molestias, saepe aspernatur eveniet doloribus
        aliquid nemo praesentium quia animi earum, fuga porro quam explicabo adipisci sit illum laborum veritatis.
        Rerum est ipsa, rem illum deleniti natus cumque alias doloremque sed totam, quod repellendus excepturi
        perferendis officia! Minima, quis. Velit dicta modi possimus rerum, incidunt libero laboriosam delectus aliquam
        nesciunt.
        Voluptatum deleniti magni adipisci eaque unde fuga repudiandae obcaecati inventore expedita velit cum quas
        necessitatibus minima odio illo accusamus possimus, nesciunt sint ipsa facere porro ipsam sunt similique sed!
        Cum.
        Molestias debitis modi vitae excepturi obcaecati? Nemo modi et officiis doloremque. Sapiente quidem, accusamus
        commodi magni nam distinctio, eos numquam optio modi explicabo
        ducimus perspiciatis porro facilis. Expedita, voluptates architecto!</p>
</section>

{% endblock %}", "histoire/histoire.html.twig", "C:\\Users\\marcr\\Desktop\\symfony\\Village\\templates\\histoire\\histoire.html.twig");
    }
}
