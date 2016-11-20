<?php

/* acp_prune_users.html */
class __TwigTemplate_189a2d186de3541b5164272ae3338024fb3ab6d65d48699cb686a89cd666d2b7 extends Twig_Template
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
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_prune_users.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS_EXPLAIN");
        echo "</p>

<form id=\"acp_prune\" method=\"post\" action=\"";
        // line 9
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t
<fieldset>
\t<legend>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("CRITERIA");
        echo "</legend>
<dl>
\t<dt><label for=\"username\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"username\" name=\"username\" /></dd>
</dl>
<dl>
\t<dt><label for=\"email\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"email\" name=\"email\" /></dd>
</dl>
<dl>
\t<dt><label for=\"joined_after\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JOINED_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<strong>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("AFTER");
        echo "</strong> <input type=\"text\" id=\"joined_after\" name=\"joined_after\" />
\t\t<br /> <br /> <strong>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("BEFORE");
        echo "</strong> <input type=\"text\" id=\"joined_before\" name=\"joined_before\" />
\t</dd>
</dl>
<dl>
\t<dt><label for=\"active\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE_EXPLAIN");
        echo "</span></dt>
\t<dd><select name=\"active_select\">";
        // line 30
        echo (isset($context["S_ACTIVE_OPTIONS"]) ? $context["S_ACTIVE_OPTIONS"] : null);
        echo "</select> <input type=\"text\" id=\"active\" name=\"active\" /></dd>
</dl>
<dl>
\t<dt><label for=\"count\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"count_select\">";
        // line 34
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select> <input type=\"number\" id=\"count\" name=\"count\" /></dd>
</dl>
<dl>
\t<dt><label for=\"posts_on_queue\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("POSTS_ON_QUEUE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"queue_select\">";
        // line 38
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select> <input type=\"number\" id=\"posts_on_queue\" name=\"posts_on_queue\" /></dd>
</dl>
";
        // line 40
        if ((isset($context["S_GROUP_LIST"]) ? $context["S_GROUP_LIST"] : null)) {
            // line 41
            echo "<dl>
\t<dt><label for=\"group_id\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_USERS_GROUP_EXPLAIN");
            echo "</span></dt>
\t<dd><select id=\"group_id\" name=\"group_id\">";
            // line 43
            echo (isset($context["S_GROUP_LIST"]) ? $context["S_GROUP_LIST"] : null);
            echo "</select></dd>
</dl>
";
        }
        // line 46
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("USERNAMES");
        echo "</legend>
<dl>
\t<dt><label for=\"users\">";
        // line 51
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SELECT_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"users\" name=\"users\" cols=\"40\" rows=\"5\"></textarea></dd>
\t<dd>";
        // line 53
        echo "[ <a href=\"";
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]";
        echo "</dd>
</dl>
</fieldset>

<fieldset>
\t<legend>";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</legend>
<dl>
\t<dt><label for=\"deleteposts\">";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("DELETE_USER_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("DELETE_USER_POSTS_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"deleteposts\" value=\"1\" /> ";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deleteposts\" name=\"deleteposts\" value=\"0\" checked=\"checked\" /> ";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"deactivate\">";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE_DELETE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE_DELETE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action\" value=\"delete\" /> ";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("DELETE_USERS");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deactivate\" name=\"action\" value=\"deactivate\" checked=\"checked\" /> ";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE");
        echo "</label></dd>
</dl>

<p class=\"submit-buttons\">
\t<input type=\"hidden\" name=\"prune\" value=\"1\" />

\t<input class=\"button1\" type=\"submit\" id=\"update\" name=\"update\" value=\"";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t";
        // line 75
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</p>
</fieldset>
</form>

";
        // line 80
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_users.html", 80)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 80,  224 => 75,  220 => 74,  216 => 73,  207 => 67,  203 => 66,  196 => 65,  190 => 62,  186 => 61,  179 => 60,  174 => 58,  162 => 53,  154 => 51,  149 => 49,  144 => 46,  138 => 43,  131 => 42,  128 => 41,  126 => 40,  121 => 38,  116 => 37,  110 => 34,  105 => 33,  99 => 30,  92 => 29,  85 => 25,  81 => 24,  73 => 22,  65 => 18,  57 => 14,  52 => 12,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_PRUNE_USERS}</h1>*/
/* */
/* <p>{L_ACP_PRUNE_USERS_EXPLAIN}</p>*/
/* */
/* <form id="acp_prune" method="post" action="{U_ACTION}">*/
/* 	*/
/* <fieldset>*/
/* 	<legend>{L_CRITERIA}</legend>*/
/* <dl>*/
/* 	<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 	<dd><input type="text" id="username" name="username" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="email">{L_EMAIL}{L_COLON}</label></dt>*/
/* 	<dd><input type="text" id="email" name="email" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="joined_after">{L_JOINED}{L_COLON}</label><br /><span>{L_JOINED_EXPLAIN}</span></dt>*/
/* 	<dd>*/
/* 		<strong>{L_AFTER}</strong> <input type="text" id="joined_after" name="joined_after" />*/
/* 		<br /> <br /> <strong>{L_BEFORE}</strong> <input type="text" id="joined_before" name="joined_before" />*/
/* 	</dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="active">{L_LAST_ACTIVE}{L_COLON}</label><br /><span>{L_LAST_ACTIVE_EXPLAIN}</span></dt>*/
/* 	<dd><select name="active_select">{S_ACTIVE_OPTIONS}</select> <input type="text" id="active" name="active" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="count">{L_POSTS}{L_COLON}</label></dt>*/
/* 	<dd><select name="count_select">{S_COUNT_OPTIONS}</select> <input type="number" id="count" name="count" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="posts_on_queue">{L_POSTS_ON_QUEUE}{L_COLON}</label></dt>*/
/* 	<dd><select name="queue_select">{S_COUNT_OPTIONS}</select> <input type="number" id="posts_on_queue" name="posts_on_queue" /></dd>*/
/* </dl>*/
/* <!-- IF S_GROUP_LIST -->*/
/* <dl>*/
/* 	<dt><label for="group_id">{L_GROUP}{L_COLON}</label><br /><span>{L_PRUNE_USERS_GROUP_EXPLAIN}</span></dt>*/
/* 	<dd><select id="group_id" name="group_id">{S_GROUP_LIST}</select></dd>*/
/* </dl>*/
/* <!-- ENDIF -->*/
/* </fieldset>*/
/* */
/* <fieldset>*/
/* 	<legend>{L_USERNAMES}</legend>*/
/* <dl>*/
/* 	<dt><label for="users">{L_ACP_PRUNE_USERS}{L_COLON}</label><br /><span>{L_SELECT_USERS_EXPLAIN}</span></dt>*/
/* 	<dd><textarea id="users" name="users" cols="40" rows="5"></textarea></dd>*/
/* 	<dd><!-- EVENT acp_prune_users_find_username_prepend -->[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]<!-- EVENT acp_prune_users_find_username_append --></dd>*/
/* </dl>*/
/* </fieldset>*/
/* */
/* <fieldset>*/
/* 	<legend>{L_OPTIONS}</legend>*/
/* <dl>*/
/* 	<dt><label for="deleteposts">{L_DELETE_USER_POSTS}{L_COLON}</label><br /><span>{L_DELETE_USER_POSTS_EXPLAIN}</span></dt>*/
/* 	<dd><label><input type="radio" class="radio" name="deleteposts" value="1" /> {L_YES}</label>*/
/* 		<label><input type="radio" class="radio" id="deleteposts" name="deleteposts" value="0" checked="checked" /> {L_NO}</label></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="deactivate">{L_DEACTIVATE_DELETE}{L_COLON}</label><br /><span>{L_DEACTIVATE_DELETE_EXPLAIN}</span></dt>*/
/* 	<dd><label><input type="radio" class="radio" name="action" value="delete" /> {L_DELETE_USERS}</label>*/
/* 		<label><input type="radio" class="radio" id="deactivate" name="action" value="deactivate" checked="checked" /> {L_DEACTIVATE}</label></dd>*/
/* </dl>*/
/* */
/* <p class="submit-buttons">*/
/* 	<input type="hidden" name="prune" value="1" />*/
/* */
/* 	<input class="button1" type="submit" id="update" name="update" value="{L_SUBMIT}" />&nbsp;*/
/* 	<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	{S_FORM_TOKEN}*/
/* </p>*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
