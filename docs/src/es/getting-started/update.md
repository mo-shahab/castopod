---
title: Actualización
sidebarDepth: 3
---

# ¿Cómo actualizar Castopod?

Después de instalar Castopod, es posible que quieras actualizar tu instancia a
la última versión para disfrutar de las últimas características ✨, correcciones
de errores 🐛 y mejoras de rendimiento ⚡.

## Instrucciones de Actualización

0. ⚠️ Antes de cualquier actualización, te recomendamos que respaldes tus
   archivos de Castopod y base de datos.

   - cf.
     [¿Debería hacer una copia de seguridad antes de actualizar?](#should-i-make-a-backup-before-updating)

1. Vaya a la página de
   [lanzamientos](https://code.castopod.org/adaures/castopod/-/releases) y vea
   si su instancia está actualizada con la última versión de Castopod

   - cf.
     [¿Dónde puedo encontrar mi versión de Castopod?](#where-can-i-find-my-castopod-version)

2. Descargue el último paquete de lanzamiento llamado `Paquete Castopod`, puede
   elegir entre los archivos `zip` o `tar.gz`

   - ⚠️ Asegúrate de descargar el paquete de Castopod y **NO** el código fuente
   - Ten en cuenta que también puedes descargar el último paquete de
     [castopod.org](https://castopod.org/)

3. En tu servidor:

   - Eliminar todos los archivos excepto `.env` y la carpeta `public/media`
   - Copie los nuevos archivos del paquete descargado en su servidor

     ::: Nota informativa

     Es posible que necesite restablecer los permisos de los archivos después el
     proceso de instalación. Compruebe
     [preocupaciones de seguridad](./security.md).

     :::

4. Actualice su esquema de base de datos desde su `Administrador de Castopod` >
   `Acerca de` página o ejecutando:

   ```bash
   php spark castopod:database-update
   ```

5. Limpia tu caché en `Administrador de Castopod` > `Ajustes` > `general` >
   `Housekeeping`
6. ✨ ¡Disfruta de tu instancia recién instalada, todo listo!

::: Nota informativa

Las versiones pueden venir con instrucciones de actualización adicionales (véase
la página de
[lanzamientos](https://code.castopod.org/adaures/castopod/-/releases)).

- cf.
  [No he actualizado mi instancia en mucho tiempo… ¿Qué debo hacer?](#no-he-actualizado-mi-instancia-en-mucho-tiempo-¿qué-debo-hacer)

:::

## Actualizaciones totalmente automatizadas

> Próximamente...

## Preguntas Frecuentes (FAQ)

### ¿Dónde puedo encontrar mi versión de Castopod?

Ve al panel de administración de Castopod, la versión se muestra en la esquina
inferior izquierda.

Alternativamente, puedes encontrar la versión en el archivo
`app > Config > Constants.php`.

### No he actualizado mi instancia en mucho tiempo… ¿Qué debo hacer?

¡No hay problema! No problem! Just get the latest release as described above.
Simplemente cuando vaya a través de las instrucciones de lanzamiento (4),
realice la actualización secuencialmente, desde el más antiguo hasta el más
reciente.

> Puede que quieras hacer una copia de seguridad de tu instancia dependiendo del
> tiempo que no hayas actualizado Castopod.

Por ejemplo, si estás en `v1.0.0-alpha.42` y te gustaría actualizar a
`v1.0.0-beta.1`:

0. (altamente recomendado) Haga una copia de seguridad de sus archivos y base de
   datos.

1. Descarga la última versión, sobrescribe tus archivos manteniendo `.env` y
   `public/media`.

2. Repase las instrucciones de actualización de cada versión secuencialmente (de
   más antiguo a más reciente) comenzando con `v1.0.0-alpha. 3`,
   `v1.0.0-alpha.44`, `v1.0.0-alpha.45`, …, `v1.0.0-beta.1`.

3. ✨ ¡Disfruta de tu instancia recién instalada, todo listo!

### ¿Debo hacer una copia de seguridad antes de actualizar?

Te aconsejamos que lo hagas, así que no lo pierdas todo si algo sale mal!

De manera más general, te aconsejamos hacer copias de seguridad regulares de tus
archivos de Castopod y base de datos para evitar que pierdas todo…
