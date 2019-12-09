<?php

// Mata a sessao do usuario para deslogar so sistema

session_start();
session_unset();
session_destroy();

header("location: /Web");
exit();
