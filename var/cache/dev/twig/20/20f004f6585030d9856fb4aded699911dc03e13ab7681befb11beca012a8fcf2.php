<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20230360d63d8ced4f898b3c3056169aab1752f9979bfddc1e440a08d52b691f extends Twig_Template
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
        $__internal_0cf782c9c6b1c277ff8cc9957c13f6526329333de5be6295af99704ffbb27e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf782c9c6b1c277ff8cc9957c13f6526329333de5be6295af99704ffbb27e8e->enter($__internal_0cf782c9c6b1c277ff8cc9957c13f6526329333de5be6295af99704ffbb27e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_803690e4c0326f352e70a441219af6e97b1727c646251158763c15fcd63cf95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803690e4c0326f352e70a441219af6e97b1727c646251158763c15fcd63cf95f->enter($__internal_803690e4c0326f352e70a441219af6e97b1727c646251158763c15fcd63cf95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0cf782c9c6b1c277ff8cc9957c13f6526329333de5be6295af99704ffbb27e8e->leave($__internal_0cf782c9c6b1c277ff8cc9957c13f6526329333de5be6295af99704ffbb27e8e_prof);

        
        $__internal_803690e4c0326f352e70a441219af6e97b1727c646251158763c15fcd63cf95f->leave($__internal_803690e4c0326f352e70a441219af6e97b1727c646251158763c15fcd63cf95f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/mcressant/Bureau/something/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
