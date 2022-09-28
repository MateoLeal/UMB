# UMB
Prueba tecnica UMB

# Para que la conexion funcione
  - clonar el repo
  - crear la base de datos (debajo dejo el script)
  - en la ruta model/conect_db.php linea 4 se deben cambiar los datos de la cadena de conexión

# script de la base de datos

-- Prueba Técnica Desarrollador PHP 
-- Mateo Leal Sandoval
-- Base de datos: `notas`
--

-- Creación base de datos
CREATE DATABASE notas;

USE notas;

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `ref` bigint(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `periodo` int(5) NOT NULL,
  PRIMARY KEY (ref)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `semestre` int(2) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `asignatura-estudiante`
--

CREATE TABLE `asignaturaEstudiante` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `asig` bigint(5) NOT NULL,
  `estu` bigint(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `nota` decimal(3, 2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (asig) REFERENCES asignatura(ref),
  FOREIGN KEY (estu) REFERENCES estudiante(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) CHARACTER SET latin1 NOT NULL,
  `password` varchar(500) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`ref`, `nombre`, `periodo`) VALUES
(1, 'Calculo integral', 12022),
(2, 'Calculo integral', 22022),
(3, 'Lógica de programación', 12022),
(4, 'Metodología de investigación', 12022);

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombre`, `semestre`) VALUES
(1034256839, 'Lorena Diaz', 1),
(1036278345, 'Feipe Medellin', 3),
(1045263789, 'Karen Morales', 3),
(1027834782, 'Juan Forero', 3);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`) VALUES
(1, 'mleal', '$2y$12$VuynOkbDSnxTyrgmrQfn5u8eXIGITO9vXHm2m0zbvHjP66bXp0KOO');
-- Cl4v3123!

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `asignaturaEstudiante` (`id`, `asig`, `estu`, `descripcion`, `nota`) VALUES
(1, 1, 1034256839, '1er corte', 3.8),
(2, 1, 1034256839, '2do corte', 4.5);

COMMIT;
