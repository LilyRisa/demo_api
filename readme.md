

## Api user
- **Login : POST [form data]{email,password} /api/user/login**
- **Register : POST [form data]{name,email,password,password_validate,permission} /api/user/register**
- **List user: GET [Content-Type]{Authorization : Bearer} /api/user**

## Api ads (logged)
- **Create ads:** 
	``` url: /api/ads/create
	param (form data):
		+ ads_name (text)
		+ ads_description (text)
		+ status (int)
	```
- **List ads:** 
	``` url: /api/ads/```
- **Update ads:** 
	``` url: /api/ads/update/{id}
	param (form data):
		+ ads_name (text)
		+ ads_description (text)
		+ status (int)
	```
- **Get item ads:** 
	``` url: /api/ads/{id} ```
- **Search ads:** 
	``` url: /api/ads/search
	param (form data):
		+ query (text)
		+ key (text)
	```
