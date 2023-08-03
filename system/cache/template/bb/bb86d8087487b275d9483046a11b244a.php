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

/* app/view/common/header.twig */
class __TwigTemplate_0d6d5605806273e76482eb0a6ab1c862 extends \Twig\Template
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
        echo "<html>
\t<head>

\t\t<script src='";
        // line 4
        echo ($context["jquery"] ?? null);
        echo "' type='text/javascript'></script>


\t\t<script src='http://localhost/example/app/assets/ext6/ext.js' type='text/javascript'></script>
\t\t<script src='";
        // line 8
        echo ($context["extj"] ?? null);
        echo "' type='text/javascript'></script>

\t\t<link
\t\thref='";
        // line 11
        echo ($context["bootstrap"] ?? null);
        echo "' type='text/css' rel='stylesheet'/>
\t\t<link href='";
        // line 12
        echo ($context["exts"] ?? null);
        echo "' type='text/css' rel='stylesheet'/>


\t\t<!--<link href='https://cdnjs.cloudflare.com/ajax/libs/extjs/6.0.0/classic/theme-crisp/resources/theme-crisp-all.css' type='text/scss' rel='stylesheet'/>-->
\t\t<!--<script src=\"https://cdn.jsdelivr.net/npm/@sencha/ext@7.7.0/activate.min.js\"></script>-->
\t\t<link href='";
        // line 17
        echo ($context["style"] ?? null);
        echo "' type='text/css' rel='stylesheet'/>
\t</head>

\t<body>
\t\t<header></header>
\t\t<div class='container'>
\t\t\t<h1 class=\"text-center\">Welcome to Oracle/MySQL and PHP and Sencha 0.1.0</h1>
\t\t\t";
        // line 24
        echo ($context["menu"] ?? null);
        echo "
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "app/view/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  67 => 17,  59 => 12,  55 => 11,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/common/header.twig", "C:\\xampp\\htdocs\\example\\app\\view\\common\\header.twig");
    }
}
