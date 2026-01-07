# WordPress

**Semantic Personal Publishing Platform**

---

## First Things First

Welcome. WordPress is a very special project to me. Every developer and contributor adds something unique to the mix, and together we create something beautiful that I am proud to be a part of. Thousands of hours have gone into WordPress, and we are dedicated to making it better every day. Thank you for making it part of your world.

— *Matt Mullenweg*

---

## Installation: Famous 5-Minute Install

1. Unzip the package in an empty directory and upload everything.
2. Open `wp-admin/install.php` in your browser. It will guide you through creating a `wp-config.php` file with your database details.
   - If this does not work, open `wp-config-sample.php`
   - Fill in your database credentials
   - Save it as `wp-config.php` and upload it
   - Reopen `wp-admin/install.php`
3. Once configured, WordPress will create the required database tables.
4. **If you did not set a password, make sure to save the generated one.**
   - Default username is `admin`
5. After installation, log in via `wp-login.php` and change your password if needed.

---

## Updating

### Automatic Update

1. Open `wp-admin/update-core.php`
2. Follow the instructions provided

### Manual Update

1. Backup any modified files (e.g., `index.php`)
2. Delete old WordPress files (keep modified ones)
3. Upload the new WordPress files
4. Open `/wp-admin/upgrade.php` in your browser

---

## Migrating from Other Systems

WordPress supports importing from various platforms.

- Documentation:  
  https://developer.wordpress.org/advanced-administration/wordpress/import/
- Import tools:  
  `wp-admin/import.php`

---

## System Requirements

### Minimum

- PHP **7.2.24** or higher
- MySQL **5.5.5** or higher

### Recommended

- PHP **8.3** or higher
- MySQL **8.0** or MariaDB **10.6**
- Apache `mod_rewrite`
- HTTPS support
- A link to https://wordpress.org on your site

---

## Online Resources

- **HelpHub**  
  https://wordpress.org/documentation/

- **WordPress Blog**  
  https://wordpress.org/news/

- **WordPress Planet**  
  https://planet.wordpress.org/

- **Support Forums**  
  https://wordpress.org/support/forums/

- **IRC Channel**  
  irc.libera.chat — `#wordpress`

---

## Final Notes

- Found a bug or have ideas? Visit the Support Forums
- WordPress provides a powerful Plugin API  
  https://developer.wordpress.org/plugins/
- Do **not** modify WordPress core files

---

## Share the Love

WordPress has no massive marketing budget — it grows because of its users.  
If you enjoy WordPress, consider sharing it, helping others, or contributing.

---

## License

WordPress is free software licensed under the **GNU General Public License (GPL v2 or later)**.

See `license.txt` for details.
