<?php
// Definimos el directorio padre del sistema
define("DIR_ROOT", __DIR__);
// Declaraciones de repositorios
$subdomain = [
	[
		'name' => 'DevWebCamp',
		'repo' => 'git@github.com:jmlocke1/DevWebCamp.git'
	],
	[
		'name' => 'bienesraices',
		'repo' => 'git@github.com:jmlocke1/bienesraices.git'
	],
	[
		'name' => 'appsalon',
		'repo' => 'git@github.com:jmlocke1/appsalon.git'
	],
	[
		'name' => 'uptask',
		'repo' => 'git@github.com:jmlocke1/uptask.git'
	]
];
$noSubdomain = [
	[
		'name' => 'blogdecafe',
		'repo' => 'git@github.com:jmlocke1/blogdecafe.git'
	],
	[
		'name' => 'frontendstore',
		'repo' => 'git@github.com:jmlocke1/frontendstore.git'
	],
	[
		'name' => 'rock-edm-festival',
		'repo' => 'git@github.com:jmlocke1/rock-edm-festival.git'
	],
	[
		'name' => 'tienda-muebles',
		'repo' => 'git@github.com:jmlocke1/tienda-muebles.git'
	],
	[
		'name' => 'tech-pro',
		'repo' => 'git@github.com:jmlocke1/tech-pro.git'
	],
	[
		'name' => 'arquitectura-bosque',
		'repo' => 'git@github.com:jmlocke1/arquitectura-bosque.git'
	],
	[
		'name' => 'nucleus',
		'repo' => 'git@github.com:jmlocke1/nucleus.git'
	],
	[
		'name' => 'cafeteria',
		'repo' => 'git@github.com:jmlocke1/cafeteria.git'
	]
];
// Funciones
function escribe($fichero, $texto) {
	$filephp = fopen($fichero, "w");
	fwrite($filephp, $texto);
	fclose($filephp);
}

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Fichero .gitignore
$texto = <<<PRE
# Copia de seguridad de scripts en linux
*.sh~

# Genéricos
**/node_modules/
*.js.map
*.css.map
**/vendor/
**/nbproject/

# Repositorios con subdominio

PRE;
foreach($subdomain as $repo){
	$texto .= $repo['name'].PHP_EOL;
}
$texto .= PHP_EOL.PHP_EOL."# Repositorios sin subdominio".PHP_EOL.PHP_EOL;
foreach($noSubdomain as $repo){
	$texto .= $repo['name'].PHP_EOL;
}
escribe('.gitignore', $texto);


// Fichero para clonar todos los repositorios
// Windows
$texto = "@REM Repositorios con subdominio".PHP_EOL.PHP_EOL;

foreach($subdomain as $repo){
	$texto .= "git clone {$repo['repo']}".PHP_EOL;
}
$texto .= PHP_EOL.PHP_EOL."@REM Repositorios sin subdominio".PHP_EOL.PHP_EOL;
foreach($noSubdomain as $repo){
	$texto .= "git clone {$repo['repo']} no-sub/{$repo['name']}".PHP_EOL;
}
escribe('clonesub.bat', $texto);

// Linux
$texto = <<<PRE
#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Repositorios con subdominio


PRE;
foreach($subdomain as $repo){
	$texto .= "git clone {$repo['repo']}".PHP_EOL;
}
$texto .= PHP_EOL.PHP_EOL."# Repositorios sin subdominio".PHP_EOL.PHP_EOL;
foreach($noSubdomain as $repo){
	$texto .= "git clone {$repo['repo']} no-sub/{$repo['name']}".PHP_EOL;
}
escribe('clonesub.sh', $texto);

// Fichero para obtener los cambios de todos los repositorios
// incluido el repositorio portfolio
// Windows
$texto = <<<PRE
@REM Primero obtenemos los cambios del repositorio actual
git pull

@REM Repositorios con subdominio


PRE;
foreach($subdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git pull
cd ..

PRE;
}
$texto .= <<<PRE


@REM Repositorios sin subdominio

cd no-sub

PRE;
foreach($noSubdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git pull
cd ..

PRE;
}
$texto .= <<<PRE

@REM Volvemos al repositorio raíz

cd ..

PRE;
escribe('pull.bat', $texto);

// Linux
$texto = <<<PRE
#!/bin/bash
# -*- ENCODING: UTF-8 -*-

# Primero obtenemos los cambios del repositorio actual
git pull

# Repositorios con subdominio


PRE;
foreach($subdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git pull
cd ..

PRE;
}
$texto .= <<<PRE


# Repositorios sin subdominio

cd no-sub

PRE;
foreach($noSubdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git pull
cd ..

PRE;
}
$texto .= <<<PRE

# Volvemos al repositorio raíz

cd ..

PRE;
escribe('pull.sh', $texto);

// Fichero para subir los cambios de todos los repositorios
// Aunque no es muy recomendable, mejor subir los cambios de uno en uno
// Windows
$texto = "@REM Repositorios con subdominio".PHP_EOL.PHP_EOL;
foreach($subdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git push
cd ..

PRE;
}
$texto .= <<<PRE


@REM Repositorios sin subdominio

cd no-sub

PRE;
foreach($noSubdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git push
cd ..

PRE;
}
$texto .= <<<PRE

@REM Volvemos al repositorio raíz

cd ..

PRE;
escribe('push.bat', $texto);

// Linux
$texto = <<<PRE
#!/bin/bash
# -*- ENCODING: UTF-8 -*-

PRE;
$texto .= "# Repositorios con subdominio".PHP_EOL.PHP_EOL;
foreach($subdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git push
cd ..

PRE;
}
$texto .= <<<PRE


# Repositorios sin subdominio

cd no-sub

PRE;
foreach($noSubdomain as $repo){
	$texto .= <<<PRE
cd {$repo['name']}
git push
cd ..

PRE;
}
$texto .= <<<PRE

# Volvemos al repositorio raíz

cd ..

PRE;
escribe('push.sh', $texto);