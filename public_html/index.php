<?php

$vendor = "../vendor/autoload.php";

include ($vendor);

if (!class_exists("\\CcMvc"))
{
    trigger_error("Porfavor instala CcMvc via composer ejecutando 'composer install --prefer-dist'", E_USER_ERROR);
}
$app = CcMvc::Start("../protected/", "CRUD php con CcMvc");
$app->Router->Route("/index", function()
{
    header("Moved Permanently", true, 301);
    $this->Redirec("");
});
$app->Router->Route("/{method}", "index/{method}");
$app->Router->Route("/{method}/{id}", "index/{method}", ['id' => '^(\d+)$']);
$app->Router->Route("/index/{method}", function($method)
{
    header("Moved Permanently", true, 301);
    $this->Redirec($method == 'index' ? '/' : $method);
});
$app->Run();
