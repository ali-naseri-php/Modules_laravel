english 

Project Status Report and Future Plans
Current Project Status:
Project Structure:

The project is designed with a modular structure following standard practices.
Each module's code is well-organized and placed in its proper location.
Multi-language Support:

The project is currently single-language and utilizes Laravel Livewire for implementation.
Data Management:

Data validation has been implemented using standard and acceptable practices.
Table relationships are properly managed, and access levels are defined in each module to avoid errors.
Queries are optimized, and a separate table for the search module has been created to handle searches across categories, products, and articles without causing heavy database joins.
User Interface and Pagination:

Despite limited frontend expertise, efforts have been made to design a simple and user-friendly interface.
Pagination is precisely implemented, reducing server load and utilizing caching for performance improvement.
Security:

User access is managed using ACL, ensuring restricted access to resources based on roles.
CSRF Tokens are utilized to protect forms against CSRF attacks.
Sensitive data, such as user passwords, is encrypted to ensure security, even in case of database breaches.
Optimization and Caching:

Caching and event listeners are used to reduce dependencies and improve performance.
Middleware and service providers have been implemented to manage modules effectively and remove direct dependencies.
Error Management and Logging:

Logs are regularly reviewed, and any issues are promptly resolved.
Future Plans:
API Development:

RESTful APIs will be developed to enable integration with other services.
Testing:

Starting in March, unit tests and integration tests will be implemented to ensure code quality and reliability.
Multi-language Support:

The project will be expanded to support multiple languages, increasing its user base.
GoLang Development:

After learning GoLang, a chat system will be developed for the website, featuring multi-language support for enhanced user experience.
Conclusion:
The project has progressed with a focus on software development standards, optimization, security, and efficient data management. With the outlined future plans, the project is expected to evolve into a scalable and user-friendly system.








فارسی ::
گزارش وضعیت پروژه و برنامه‌ریزی آینده
وضعیت فعلی پروژه:
ساختار پروژه:

ساختار پروژه به‌صورت ماژولار و استاندارد طراحی شده است.
کدهای هر بخش در جایگاه مناسب خود قرار دارند و نظم در ساختار فایل‌ها رعایت شده است.
چندزبانه بودن:

پروژه فعلاً تک‌زبانه است و از Laravel Livewire برای پیاده‌سازی استفاده شده است.
مدیریت داده‌ها:

ولیدیشن داده‌ها به‌صورت استاندارد و قابل‌قبول پیاده‌سازی شده است.
روابط بین جداول به درستی مدیریت شده و سطوح دسترسی در هر ماژول تعریف شده است تا از بروز خطا جلوگیری شود.
کوئری‌ها بهینه‌سازی شده‌اند و برای مدیریت بهتر جستجو، جدول جداگانه‌ای برای ماژول جستجو ایجاد شده است که فشار بر دیتابیس را کاهش می‌دهد.
رابط کاربری و پیجینیشن:

با وجود تخصص محدود در فرانت‌اند، تلاش شده تا رابط کاربری ساده و کاربردی طراحی شود.
پیجینیشن به‌صورت دقیق و بهینه پیاده‌سازی شده است. این قابلیت علاوه بر کاهش فشار بر سرور، از کش برای بهبود سرعت استفاده می‌کند.
امنیت:

سطح دسترسی کاربران با استفاده از ACL مدیریت شده است.
از CSRF Token برای امنیت فرم‌ها و جلوگیری از حملات استفاده شده است.
داده‌های حساس مانند رمز عبور کاربران رمزنگاری شده است تا حتی در صورت دسترسی غیرمجاز به دیتابیس، امنیت حفظ شود.
بهینه‌سازی و کش:

از کش و Event Listener برای کاهش وابستگی‌ها و بهبود عملکرد استفاده شده است.
از میدلور (Middleware) و سرویس پروایدر (Service Provider) برای حذف وابستگی‌ها و مدیریت بهتر ماژول‌ها بهره گرفته شده است.
مدیریت خطا و لاگ:

لاگ‌های پروژه به‌صورت منظم بررسی می‌شوند و خطاهای احتمالی به‌سرعت برطرف می‌شوند.
برنامه‌ریزی آینده:
نوشتن API:

برنامه‌ریزی شده تا در آینده APIهای RESTful برای پروژه نوشته شود تا امکان ارتباط با سرویس‌های دیگر فراهم شود.
تست:

از اسفند ماه، تست‌های واحد (Unit Testing) و یکپارچگی (Integration Testing) برای بهبود کیفیت کدها شروع خواهند شد.
چندزبانگی:

پروژه در آینده به چند زبان توسعه داده خواهد شد تا کاربران بیشتری را پشتیبانی کند.
توسعه با GoLang:

پس از یادگیری GoLang، سیستم چت برای سایت پیاده‌سازی خواهد شد. این سیستم قابلیت چندزبانه خواهد داشت و به ارتقای تجربه کاربری کمک می‌کند.
نتیجه‌گیری:
پروژه با رعایت استانداردهای توسعه نرم‌افزار و تمرکز بر بهینه‌سازی عملکرد، امنیت، و مدیریت داده‌ها پیش رفته است. با توجه به برنامه‌ریزی‌های آینده، انتظار می‌رود این پروژه به یک سیستم مقیاس‌پذیر و کاربردی تبدیل شود.

