-- Ejecutar una vez en la base de datos de VK (vk.redgam.com).
CREATE TABLE IF NOT EXISTS alumni_responses (
    document_id VARCHAR(20) NOT NULL PRIMARY KEY,
    response_json JSON NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
