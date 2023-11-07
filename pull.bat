@REM Primero obtenemos los cambios del repositorio actual
git pull

@REM Repositorios con subdominio

cd DevWebCamp
git pull
cd ..
cd bienesraices
git pull
cd ..
cd appsalon
git pull
cd ..
cd uptask
git pull
cd ..


@REM Repositorios sin subdominio

cd no-sub
cd blogdecafe
git pull
cd ..
cd frontendstore
git pull
cd ..
cd rock-edm-festival
git pull
cd ..
cd tienda-muebles
git pull
cd ..
cd tech-pro
git pull
cd ..
cd arquitectura-bosque
git pull
cd ..
cd nucleus
git pull
cd ..

@REM Volvemos al repositorio raíz

cd ..
