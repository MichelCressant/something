<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d593f4458299476fc6b7d678190acab5d057489d282bdb6ae1dacf3df889929f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df9bf1447cd5bb42fa370791caa63fc4c3045d551575bb50db1c6cc7042a8fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9bf1447cd5bb42fa370791caa63fc4c3045d551575bb50db1c6cc7042a8fa9->enter($__internal_df9bf1447cd5bb42fa370791caa63fc4c3045d551575bb50db1c6cc7042a8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d3e9f49ae532781be10f8ef521ff3b54781ff248179196b68b5a6caa664ae85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e9f49ae532781be10f8ef521ff3b54781ff248179196b68b5a6caa664ae85a->enter($__internal_d3e9f49ae532781be10f8ef521ff3b54781ff248179196b68b5a6caa664ae85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_df9bf1447cd5bb42fa370791caa63fc4c3045d551575bb50db1c6cc7042a8fa9->leave($__internal_df9bf1447cd5bb42fa370791caa63fc4c3045d551575bb50db1c6cc7042a8fa9_prof);

        
        $__internal_d3e9f49ae532781be10f8ef521ff3b54781ff248179196b68b5a6caa664ae85a->leave($__internal_d3e9f49ae532781be10f8ef521ff3b54781ff248179196b68b5a6caa664ae85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
