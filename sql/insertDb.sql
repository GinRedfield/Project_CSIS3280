-- php artisan migrate
-- mysql -u root -p
-- source insertdb.sql
USE `project-yzh-86`;

INSERT INTO `tickets` (`id`, `summary`, `status`, `description`, `create_by`, `date_created`, `created_at`, `updated_at`) VALUES (NULL, 'Server Error 400', 'Pending', 'Check with team in network room.', 'Admin', current_timestamp(), current_timestamp(), current_timestamp());
INSERT INTO `tickets` (`id`, `summary`, `status`, `description`, `create_by`, `date_created`, `created_at`, `updated_at`) VALUES (NULL, 'Server Error 419', 'Pending', 'Network room maintenance needed.', 'Sarah', current_timestamp(), current_timestamp(), current_timestamp());
INSERT INTO `tickets` (`id`, `summary`, `status`, `description`, `create_by`, `date_created`, `created_at`, `updated_at`) VALUES (NULL, 'Hardware Request', 'Pending', 'Accounting Dep requires a new workstation.', 'Thomas', current_timestamp(), current_timestamp(), current_timestamp());
INSERT INTO `tickets` (`id`, `summary`, `status`, `description`, `create_by`, `date_created`, `created_at`, `updated_at`) VALUES (NULL, 'Adobe Suite Renewal', 'Pending', 'Someone help!', 'James', current_timestamp(), current_timestamp(), current_timestamp());

