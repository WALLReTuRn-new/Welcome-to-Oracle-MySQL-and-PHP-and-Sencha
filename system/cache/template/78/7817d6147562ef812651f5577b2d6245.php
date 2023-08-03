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

/* app/view/operation/create.twig */
class __TwigTemplate_08ee0b5c68b385cf5c61085b522f2dbd extends \Twig\Template
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
\t<div id=\"createTable\" class=\"content\"></div>
\t
</div>
";
        // line 6
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">

Ext.create('Ext.form.Panel', {
    title: 'Create Data Table - index With Auto_Increment is Automatic Added. ALL Table Where You Create - >',
    id: 'MyFormPanel',
    renderTo: createTable,
    width: 1200,
    height: 500,
    bodyPadding: 10,

    defaultType: 'textfield',

    items: [
        {
            fieldLabel: 'Table Name',
            name: 'tableName',
            autoEl: {
            },
            allowBlank: false
        },
        {
            xtype: 'numberfield',
            fieldLabel: 'Number Of Columns',
            helpText: 'This is your first name dummy!',
            name: 'numberColumns',
            value: 0,
            anchor: '100%',
            maxValue: 99,
            minValue: 1,
            hideTrigger: true,
            keyNavEnabled: false,
            mouseWheelEnabled: false,
            allowBlank: false,
            background: 'transparent',
            border: false,
            allowBlank: false,
            listeners: {
                afterrender: function (view) {
                    var currentEl = this;
                    view.el.on('mouseenter', function (evt, field) {
                        Ext.create('Ext.tip.ToolTip', {
                            target: view.getEl(),
                            html: 'Accept number bettwen 1 and 99'
                        });
                    }, this);
                    view.el.on('input', function () {
                        var form = this.up('form'); // this is a better approach


                        var ContainerColumnt = Ext.getCmp('columtContainer');
                        // console.log(ContainerColumnt)
                        ContainerColumnt.removeAll();


                        let i = 0;
                        while (i < this.getValue()) {
                            ContainerColumnt.add({
                                //Ext.create(\"Ext.form.field.Text\", {layout: 'hbox',flex: 1,fieldLabel:\"First Name\"}),
                                //Ext.create(\"Ext.form.field.Text\", {layout: 'hbox',flex: 2,fieldLabel:\"First2 Name\"})
                                anchor: '100%',
                                bodyPadding: 10,
                                layout: {
                                    type: 'hbox'
                                },
                                defaults: {
                                    width: 300,
                                    xtype: 'textfield',
                                    allowBlank: false
                                },
                                items: [{
                                    name: 'rows[' + i + '][nameColumn]',
                                    fieldLabel: 'Column Name',
                                    allowBlank: false
                                }, {
                                    name: 'rows[' + i + '][typeColumn]',
                                    xtype: 'combobox',
                                    fieldLabel: 'Column type',
                                    autoEl: {
                                        'data_attribute_rows': 'rows-' + i
                                    },

                                    store: {
                                        fields: ['abbr', 'type'],
                                        data: [
                                            { \"abbr\": \"int\", \"type\": \"Int\" },
                                            { \"abbr\": \"varchar\", \"type\": \"Varchar\" },
                                            { \"abbr\": \"text\", \"type\": \"Text\" },
                                            { \"abbr\": \"datetime\", \"type\": \"datetime\" }
                                        ]
                                    },
                                    queryMode: 'local',
                                    displayField: 'type',
                                    valueField: 'abbr',
                                    allowBlank: false,
                                    listeners: {
                                        select: function (combo, records, eOpts) {
                                            if (records.data.abbr === 'datetime') {
                                                \$('[data-attribute-rows=\"size-' + \$(combo.el.dom).attr('data_attribute_rows') + '\"]').hide();
                                                var dynamycrow = \$(combo.el.dom).attr('data_attribute_rows');
                                                var valss = Ext.get('size-' + dynamycrow + '-inputEl');
                                                valss.dom.value = '6';
                                                valss.dom.ariaValueNow = '6';
                                            } else {
                                                \$('[data-attribute-rows=\"size-' + \$(combo.el.dom).attr('data_attribute_rows') + '\"]').show();
                                                var dynamycrow = \$(combo.el.dom).attr('data_attribute_rows');
                                                var valss = Ext.get('size-' + dynamycrow + '-inputEl');
                                                valss.dom.value = '';
                                                valss.dom.ariaValueNow = '';
                                            }
                                        }
                                    }
                                }, {
                                    id: 'size-rows-' + i,
                                    xtype: 'numberfield',
                                    name: 'rows[' + i + '][sizeColumn]',
                                    fieldLabel: 'C. size(1-255)',
                                    placeHolder: 'Between 1 a 255',
                                    autoEl: {
                                        'data-attribute-rows': 'size-rows-' + i
                                    },
                                    maxValue: 255,
                                    minValue: 1,
                                    hideTrigger: true,
                                    keyNavEnabled: false,
                                    mouseWheelEnabled: false,
                                    allowBlank: false
                                }
                                ]
                            });
                            i++;
                        }

                    }, this);
                }
            },
        }, {
            id: 'columtContainer',
            xtype: 'panel',


        }
    ],

    buttons: [
        {
            text: 'Submit',
            handler: function () {
                var form = this.up('form'); // get the form panel
                if (form.isValid()) { // make sure the form contains valid data before submitting
                    Ext.Ajax.request({
                        url: 'http://localhost/example/index.php?route=operation/create|createTable',
                        method: 'POST',
                        params: form.getValues(),
                        data: form.getValues(),
                        datatype: 'json',
                        success: function (response, opts) {
                            Ext.Msg.alert('Form submitted successfully!');
                            var obj = Ext.decode(response.responseText); // THIS IS A REAL HTML FORM
                            //console.log(obj);

                           if(obj.success){
                              
                           }

                        },
                        failure: function (response, opts) {
                            console.log('server-side failure with status code ' + response.status);
                        }
                    });
                } else { // display error alert if the data is invalid
                    Ext.Msg.alert('Invalid Data', 'Please correct form errors.')
                }
            }
        }
    ]
});

\$(document).ready(function () {
    var htmlUrl = '';
    \$.ajax({
        url: 'http://localhost/example/index.php?route=operation/select|selectTable',
        method: 'GET',
        dataType: 'json',
        success: function (json) {
            //\$('body').append(html);

            \$.each(json.table, function (i, item) {
              //  console.log(item); 
                //htmlUrl += ' <a href=\"' + item.tableHref + '\">' + item.table + '</a> |';
                 htmlUrl += ' <a href=\"#\">' + item.table + '</a> |';
            });
            \$('#MyFormPanel_header-title-textEl').append(htmlUrl);

        }
    });
});


\$(document).on('click','#button-1009',function(){
location.reload();
});

</script>
";
    }

    public function getTemplateName()
    {
        return "app/view/operation/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/view/operation/create.twig", "C:\\xampp\\htdocs\\example\\app\\view\\operation\\create.twig");
    }
}
