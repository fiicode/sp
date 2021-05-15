## SP project

1 - panel admin
    - Ajout des slug (champ DB `slug`) et traitement sur ProductController
      a- création du controller `DebugController`
            ~ slug ~
        - tests d'insertion slug rendus

        b - Creation d'une route `insert/debug/slug`
            - creation de la migration `add_field_slug_on_product`
            - Definition d'une fonction d'insertion dans `DebugController` `@slug`
            - slug identique => rang
            - execution
2 - Login 
        Mobile
        Web
3 - Home page
    - Sidebar content
    - Detail Page content
    - Cart content
