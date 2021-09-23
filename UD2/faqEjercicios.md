# FAQ

Voy a intentar solucionar diversos problemas y dudas sobre la puesta a punto de los repositorios entornods y ejercicios.

1. ¿Está mi repositorio sincronizado? ¿He subido los cambios?

    - git status
    - Si uso tb. git fetch veo si hay código nuevo arriba

2. ¿cómo hago una instantanea o commit?
    git add ..... (. , un fichero, un directorio.... )
    git commit -m "un comentario"

3. ¿como traigo a clase el código de casa?
    - Ir al directorio "data/ejercicios"
        - En casa:

        ```
        git add .
        git commit -m "...."
        git push
        ```

    - En clase    
        ```
        git pull
        ```

4. ¿Cómo verifico que tengo bien mis remotos? (en ejercicios)
    git remote -v  //veo los remotos.
        //normalmente solo usamos origin (2 líneas)
        //en los ejercicios usamos dos remotos (4 líneas)


5. ¿Cómo añado un remoto "rafa"? 

    ```
    git remote add rafa git@github.com:rafacabeza/ejerciciciosphp.git
    git remote add origin git@github.com:tunombreGithub/ejerciciciosphp.git
    ```

6. ¿Cómo borro un remoto? Dos ejemplos:
   
    ```
    git remote remove rafa
    git remote remove origin
    ```



7. COMPROBAR QUE EL REPOSITORIO "entornods" ESTÁ BIEN

    ```
    cd ~/entornods
    git remote -v
        2 lineas, 1 repositorio (rafacabeza)
    ```
    
    - para hacer los ejercicios debe estar en la rama ejercicios

        -  Comprobación:

       ``` 
        git branch (debe contestar ejercicios en verde)
        ```

        -  Arreglar:

        ```
        git checkout --track orign/ejercicios
        ```

8. COMPROBAR REPOSITORIO EJERECICIOS:

    ```
    cd ~/entornods/data/ejercicios
    git remote -v
        debe salir 4 lineas, 2 remotos (origin y rafa)
        si hay dos remotos, 4 lineas (origin y rafa):
        origin -> repositorio del alumno
        rafa-> repositorio del profesor
    ```



    - SI NO EXISTE EL DIRECTORIO ejercicios
    
    ```
    cd ~/entornods/data
    git clone "ruta_ejercicios_del_alumno" ejercicios
    cd ejercicios
    git remote add rafa git@github.com:rafacabeza/ejerciciciosphp.git
    ```
