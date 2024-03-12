-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2024 a las 13:03:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlexpinverza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numero_Cedula` varchar(191) NOT NULL,
  `nombres` varchar(191) NOT NULL,
  `apellidos` varchar(191) NOT NULL,
  `celular` varchar(191) NOT NULL,
  `municipio_Procedencia` varchar(191) NOT NULL,
  `ubicacion_Actual` varchar(191) NOT NULL,
  `direccion_Domiciliar` varchar(191) NOT NULL,
  `nomina` varchar(191) NOT NULL,
  `tipo_Contrato` varchar(191) NOT NULL,
  `foto_Perfil` varchar(191) DEFAULT NULL,
  `estado` varchar(191) NOT NULL,
  `doc_carnet_Bloqueo` varchar(191) NOT NULL,
  `doc_carnet_Inverza` varchar(191) NOT NULL,
  `doc_cedula` varchar(191) NOT NULL,
  `doc_contrato` varchar(191) NOT NULL,
  `doc_colilla_Inss` varchar(191) NOT NULL,
  `doc_hoja_Ingreso` varchar(191) NOT NULL,
  `doc_hoja_EPP` varchar(191) NOT NULL,
  `doc_examen_General` varchar(191) NOT NULL,
  `doc_examen_Plomo` varchar(191) NOT NULL,
  `doc_examen_Glucosa` varchar(191) NOT NULL,
  `doc_licencia_Conducir` varchar(191) NOT NULL,
  `doc_licencia_Soldador` varchar(191) NOT NULL,
  `doc_licencia_Electricidad` varchar(191) NOT NULL,
  `doc_certificado_Salud` varchar(191) NOT NULL,
  `doc_record_Policia` varchar(191) NOT NULL,
  `doc_tarjeta_Covid` varchar(191) NOT NULL,
  `doc_tarjeta_Tetano` varchar(191) NOT NULL,
  `induccion_Cemex` varchar(191) NOT NULL,
  `induccion_Ambiente_Bonanza` varchar(191) NOT NULL,
  `induccion_Seguridad_Bonanza` varchar(191) NOT NULL,
  `induccion_General_Limon` varchar(191) NOT NULL,
  `protocolo_Covid_Limon` varchar(191) NOT NULL,
  `prevencion_Incendios_Limon` varchar(191) NOT NULL,
  `respuesta_Emergencia_Limon` varchar(191) NOT NULL,
  `sistema_Cinco_Puntos_Limon` varchar(191) NOT NULL,
  `manipulacion_Manual_Carga_Limon` varchar(191) NOT NULL,
  `manejo_Residuos_Limon` varchar(191) NOT NULL,
  `hiper_Limon` varchar(191) NOT NULL,
  `aps_Limon` varchar(191) NOT NULL,
  `primeros_Auxilios_Teorico_Limon` varchar(191) NOT NULL,
  `primeros_Auxilios_Practico_Limon` varchar(191) NOT NULL,
  `manejo_Biodiversidad_Limon` varchar(191) NOT NULL,
  `operacion_Equipos_Livianos_Teorico_Limon` varchar(191) NOT NULL,
  `operacion_Equipos_Livianos_Practico_Limon` varchar(191) NOT NULL,
  `manejo_Hidrocarburo_Limon` varchar(191) NOT NULL,
  `bloqueo_Etiquetado_Limon` varchar(191) NOT NULL,
  `sistema_Gestion_Social_Limon` varchar(191) NOT NULL,
  `nuestro_Viaje_Seguridad_Limon` varchar(191) NOT NULL,
  `induccion_General_Libertad` varchar(191) NOT NULL,
  `protocolo_Covid_Libertad` varchar(191) NOT NULL,
  `prevencion_Incendios_Libertad` varchar(191) NOT NULL,
  `respuesta_Emergencia_Libertad` varchar(191) NOT NULL,
  `sistema_Cinco_Puntos_Libertad` varchar(191) NOT NULL,
  `manipulacion_Manual_Carga_Libertad` varchar(191) NOT NULL,
  `manejo_Residuos_Libertad` varchar(191) NOT NULL,
  `hiper_Libertad` varchar(191) NOT NULL,
  `aps_Libertad` varchar(191) NOT NULL,
  `primeros_Auxilios_Teorico_Libertad` varchar(191) NOT NULL,
  `primeros_Auxilios_Practico_Libertad` varchar(191) NOT NULL,
  `manejo_Biodiversidad_Libertad` varchar(191) NOT NULL,
  `operacion_Equipos_Livianos_Teorico_Libertad` varchar(191) NOT NULL,
  `operacion_Equipos_Livianos_Practico_Libertad` varchar(191) NOT NULL,
  `manejo_Hidrocarburo_Libertad` varchar(191) NOT NULL,
  `bloqueo_Etiquetado_Libertad` varchar(191) NOT NULL,
  `sistema_Gestion_Social_Libertad` varchar(191) NOT NULL,
  `nuestro_Viaje_Seguridad_Libertad` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `created_at`, `updated_at`, `numero_Cedula`, `nombres`, `apellidos`, `celular`, `municipio_Procedencia`, `ubicacion_Actual`, `direccion_Domiciliar`, `nomina`, `tipo_Contrato`, `foto_Perfil`, `estado`, `doc_carnet_Bloqueo`, `doc_carnet_Inverza`, `doc_cedula`, `doc_contrato`, `doc_colilla_Inss`, `doc_hoja_Ingreso`, `doc_hoja_EPP`, `doc_examen_General`, `doc_examen_Plomo`, `doc_examen_Glucosa`, `doc_licencia_Conducir`, `doc_licencia_Soldador`, `doc_licencia_Electricidad`, `doc_certificado_Salud`, `doc_record_Policia`, `doc_tarjeta_Covid`, `doc_tarjeta_Tetano`, `induccion_Cemex`, `induccion_Ambiente_Bonanza`, `induccion_Seguridad_Bonanza`, `induccion_General_Limon`, `protocolo_Covid_Limon`, `prevencion_Incendios_Limon`, `respuesta_Emergencia_Limon`, `sistema_Cinco_Puntos_Limon`, `manipulacion_Manual_Carga_Limon`, `manejo_Residuos_Limon`, `hiper_Limon`, `aps_Limon`, `primeros_Auxilios_Teorico_Limon`, `primeros_Auxilios_Practico_Limon`, `manejo_Biodiversidad_Limon`, `operacion_Equipos_Livianos_Teorico_Limon`, `operacion_Equipos_Livianos_Practico_Limon`, `manejo_Hidrocarburo_Limon`, `bloqueo_Etiquetado_Limon`, `sistema_Gestion_Social_Limon`, `nuestro_Viaje_Seguridad_Limon`, `induccion_General_Libertad`, `protocolo_Covid_Libertad`, `prevencion_Incendios_Libertad`, `respuesta_Emergencia_Libertad`, `sistema_Cinco_Puntos_Libertad`, `manipulacion_Manual_Carga_Libertad`, `manejo_Residuos_Libertad`, `hiper_Libertad`, `aps_Libertad`, `primeros_Auxilios_Teorico_Libertad`, `primeros_Auxilios_Practico_Libertad`, `manejo_Biodiversidad_Libertad`, `operacion_Equipos_Livianos_Teorico_Libertad`, `operacion_Equipos_Livianos_Practico_Libertad`, `manejo_Hidrocarburo_Libertad`, `bloqueo_Etiquetado_Libertad`, `sistema_Gestion_Social_Libertad`, `nuestro_Viaje_Seguridad_Libertad`) VALUES
(1, '2024-03-06 03:25:18', '2024-03-06 03:26:08', '0012008900001A', 'Hector Antonio', 'Romero Estrada', '78994612', 'San Rafael del Sur', 'INVERZA', 'Barrio la Llansa, Planta ENATREL 100 mts al sur.', 'Administracion', 'Determinado', 'uploads/Gc7KhCYWfS5LOWP0MBiYRF8vChPgli1uWQx6bfFy.png', 'Activo', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'No', 'No', 'Si', 'No', 'No', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) NOT NULL,
  `descripcion` varchar(191) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `titulo`, `descripcion`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Actualizar Record de Policia', 'Héctor Antonio Romero Estrada', '2024-03-05 22:28:28', '2024-04-30 15:28:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2024_03_01_204844_create_events_table', 1),
(9, '2024_03_02_143545_create_eventos_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(14, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(16, '2024_02_26_142705_create_sessions_table', 3),
(17, '2024_02_26_144642_create_empleados_table', 3),
(18, '2024_03_05_211547_create_events_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HdBknJhnmi4Z5xyHWWzMvqp3wjzIMmoZzMGFJovy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQnB2TjV6d0tPd1JDS2p4cUpsWXBaajZhR29TeVpPSnlGV2dBY283RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYWxlbmRhciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1709677182);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Inverza', 'admin@inverza.net', NULL, '$2y$12$1v66bBQnH3lA21D9TnR6a.tv9JcccOg0DKbwS1qwDZQGIPwWJ0c9O', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 03:22:57', '2024-03-06 03:22:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
