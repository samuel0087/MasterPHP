# RENOMBRAR TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR NOMBRE DE LA COLUMNA #
ALTER TABLE usuarios_renom CHANGE nombre nombres varchar(100) null;

# modificar columna sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellidos char(50) not null;

# añadir una columna #
ALTER TABLE usuarios_renom ADD website varchar(100) null;

# añadir restriccion a columna #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar una columna #
ALTER TABLE usuarios_renom DROP website;