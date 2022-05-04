<?php
// дропнуть таблицу с foreignId в миграции

DB::statement('SET FOREIGN_KEY_CHECKS = 0');
Schema::dropifExists('tableName');
DB::statement('SET FOREIGN_KEY_CHECKS = 1');