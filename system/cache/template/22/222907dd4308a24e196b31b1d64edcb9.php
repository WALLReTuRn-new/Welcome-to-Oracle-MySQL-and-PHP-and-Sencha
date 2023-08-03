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

/* app/view/common/home.twig */
class __TwigTemplate_1843d80756f97d901d7e3225d0ea95e3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
<div id=\"myContainer\"></div>
</div>
";
        // line 5
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">

Ext.define('User', {
    extend: 'Ext.data.Model',
    fields: ['name', 'email', 'phone']
});
var userStore = Ext.create('Ext.data.Store', {
    model: 'User',
    autoLoad: true,
    pageSize: 100,
    proxy: {
        type: 'ajax',
        url: 'http://localhost/example/index.php?route=operation/select',
        reader: {
            type: 'json',
            rootProperty: 'users',
            totalProperty: 'total'
        }
    }
    // data: [
    //     { name: 'Lisa', email: 'lisa@simpsons.com', phone: '555-111-1224' },
    //     { name: 'Bart', email: 'bart@simpsons.com', phone: '555-222-1234' },
    //     { name: 'Homer', email: 'homer@simpsons.com', phone: '555-222-1244' },
    //     { name: 'Marge', email: 'marge@simpsons.com', phone: '555-222-1254' }
    //  ]
});
Ext.create('Ext.grid.Panel', {
    renderTo: myContainer,
    store: userStore,
    width: 1200,
    height: 500,
    title: 'All Users From DataTable = \"Users\"',
    columns: [
        {
            text: 'Name',
            width: 250,
            sortable: true,
            hideable: true,
            dataIndex: 'name'
        },
        {
            text: 'Email Address',
            width: 350,
            dataIndex: 'email',
            hidden: false
        },
        {
            text: 'Phone Number',
            flex: 1,
            width: 350,
            dataIndex: 'phone'
        }
    ]
});



</script>
";
    }

    public function getTemplateName()
    {
        return "app/view/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/common/home.twig", "C:\\xampp\\htdocs\\example\\app\\view\\common\\home.twig");
    }
}
