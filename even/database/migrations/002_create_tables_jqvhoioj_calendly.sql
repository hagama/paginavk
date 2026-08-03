-- Selecciona la base ya creada y ejecuta este archivo desde phpMyAdmin o MySQL.
USE jqvhoioj_calendly;

CREATE TABLE IF NOT EXISTS registrations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uuid CHAR(36) NOT NULL UNIQUE,
    full_name VARCHAR(180) NOT NULL,
    email VARCHAR(180) NOT NULL,
    phone VARCHAR(40) NULL,
    timezone VARCHAR(100) NOT NULL DEFAULT 'America/Bogota',
    selected_start_local DATETIME NOT NULL,
    selected_start_utc DATETIME NOT NULL,
    status ENUM('pending','processing','scheduled','failed','canceled','rescheduled') NOT NULL DEFAULT 'pending',
    calendly_event_uri VARCHAR(500) NULL,
    calendly_event_uuid VARCHAR(100) NULL,
    calendly_invitee_uri VARCHAR(500) NULL,
    calendly_invitee_uuid VARCHAR(100) NULL,
    cancel_url TEXT NULL,
    reschedule_url TEXT NULL,
    form_response_json JSON NOT NULL,
    calendly_response_json JSON NULL,
    error_message TEXT NULL,
    idempotency_key VARCHAR(150) NOT NULL UNIQUE,
    sheets_synced_at DATETIME NULL,
    email_sent_at DATETIME NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_registration_email (email),
    INDEX idx_registration_start (selected_start_utc),
    INDEX idx_registration_status (status)
);

CREATE TABLE IF NOT EXISTS integration_logs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    registration_id BIGINT UNSIGNED NULL,
    service VARCHAR(50) NOT NULL,
    action VARCHAR(100) NOT NULL,
    request_id VARCHAR(150) NULL,
    http_status INT NULL,
    success TINYINT(1) NOT NULL DEFAULT 0,
    request_json JSON NULL,
    response_json JSON NULL,
    error_message TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_logs_registration FOREIGN KEY (registration_id)
        REFERENCES registrations(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS webhook_events (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    event_key VARCHAR(191) NOT NULL UNIQUE,
    event_type VARCHAR(100) NOT NULL,
    payload_json JSON NOT NULL,
    processed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS admins (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(180) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
