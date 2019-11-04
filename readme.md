

## Api user
- **Login : POST [form data]{email,password} /api/user/login**
- **Register : POST [form data]{name,email,password,password_validate,permission} /api/user/register**
- **List user: GET [Content-Type]{Authorization : Bearer} /api/user**

## Api ads (logged)
- **Create ads:** 
	*url: [/api/ads/create](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ ads_name (text)
		+ ads_description (text)
		+ status (int)
	```
- **List ads:** 
	*url: [/api/ads/](https://fb.com/bo.cuaban.7169)
	``` ```
- **Update ads:** 
	*url: [/api/ads/update/{id}](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ ads_name (text)
		+ ads_description (text)
		+ status (int)
	```
- **Get item ads:** 
	*url: [/api/ads/{id}](https://fb.com/bo.cuaban.7169)
	```  ```
- **Search ads:** 
	*url: [/api/ads/search](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ query (text) : query search
		+ key (text) : column DB
	```

## Api app (logged)
*url: [/api/app/create](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ ads_name (text)
		+ ads_description (text)
		+ status (int)
	```
- **List app:** 
	*url: [/api/app/](https://fb.com/bo.cuaban.7169)
	``` ```
- **Update app:** 
	*url: [/api/app/update/{id}](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ ad_type (int)
		+ app_type (int)
		+ cat_int (tinyint)
		+ cat_key (text)
		+ cat_type (text)
		+ category (text)
		+ created (text)
		+ description (text)
		+ downloads (text)
		+ i18n_lang (tinyint)
		+ market_update (text)
		+ package_name (text)
		+ rating (double)
		+ screenshots (text)
		+ size (text)
		+ title (text)
		+ keyword (text)
		+ version (text)
		+ website (text)
		+ developer (text)
		+ icon (text)
		+ market_url (text)
		+ db_url (text) null
		+ apk_url (text)
		+ priority (tinyint)
		+ status (tinyint)
	```
- **Get item app:** 
	*url: [/api/app/{id}](https://fb.com/bo.cuaban.7169)
	```  ```
- **Search app:** 
	*url: [/api/app/search](https://fb.com/bo.cuaban.7169)*
	```
	param (form data):
		+ query (text) : query search
		+ key (text) : column DB
	```
