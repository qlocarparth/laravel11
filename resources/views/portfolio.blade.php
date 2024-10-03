<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-900 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg">
                
                <!-- Contact Information -->
                <section class="p-6 border-b border-gray-200">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Contact Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gray-50 p-4 border rounded-lg shadow-sm flex items-center">
                            <p class="text-gray-700"><strong>Location:</strong> Ahmedabad, India 380015</p>
                        </div>
                        <div class="bg-gray-50 p-4 border rounded-lg shadow-sm flex items-center">
                            <p class="text-gray-700"><strong>Email:</strong> <a href="mailto:parth.wadia7@gmail.com" class="text-blue-600 hover:underline">parth.wadia7@gmail.com</a></p>
                        </div>
                        <div class="bg-gray-50 p-4 border rounded-lg shadow-sm flex items-center">
                            <p class="text-gray-700"><strong>Phone:</strong> <a href="tel:+918866014645" class="text-blue-600 hover:underline">+91 8866014645</a></p>
                        </div>
                    </div>
                </section>

                <!-- Professional Summary -->
                <section class="p-6 border-b border-gray-200">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Professional Summary</h2>
                    <div class="bg-gray-50 p-4 border rounded-lg shadow-sm">
                        <p class="text-gray-700">Experienced PHP and Laravel developer with 4 years in web development, specializing in API services (REST and SOAP), OOP, and MVC principles. Proficient in database design and optimization with MySQL, and skilled in utilizing server tools such as Apache and AWS cloud servers. Known for excellent communication, problem-solving abilities, and a passion for modern and interactive design.</p>
                    </div>
                </section>

                <!-- Technical Skills -->
                <section class="p-6 border-b border-gray-200">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Technical Skills</h2>
                    <div class="bg-gray-50 p-4 border rounded-lg shadow-sm">
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li><strong>Languages:</strong> PHP, JavaScript, HTML, CSS, C, C++</li>
                            <li><strong>Frameworks:</strong> Laravel, React.js (Basic Knowledge)</li>
                            <li><strong>Databases:</strong> MySQL</li>
                            <li><strong>API Services:</strong> REST, SOAP</li>
                            <li><strong>Tools:</strong> Apache, AWS</li>
                            <li><strong>Applications:</strong> Postman, GitHub, Gitlab, Visual Studio Code, PhpStorm, Notepad++</li>
                        </ul>
                    </div>
                </section>

                <!-- Technical Education -->
                <section class="p-6 border-b border-gray-200">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Technical Education</h2>
                    <div class="bg-gray-50 p-4 border rounded-lg shadow-sm space-y-4">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Bachelor of Engineering in Information Technology</h4>
                            <p class="text-gray-700"><strong>Institution:</strong> Aurum Institute of Technology</p>
                            <p class="text-gray-700"><strong>Years:</strong> 2016 – 2020</p>
                            <p class="text-gray-700"><strong>CGPA:</strong> 7.72</p>
                            <p class="text-gray-700"><strong>Project:</strong> Online Exam Using PHP</p>
                        </div>
                        <hr class="border-gray-300">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Diploma in Information Technology</h4>
                            <p class="text-gray-700"><strong>Institution:</strong> B.P.T.I Bhavnagar College</p>
                            <p class="text-gray-700"><strong>Years:</strong> 2012 – 2016</p>
                            <p class="text-gray-700"><strong>CGPA:</strong> 7.13</p>
                            <p class="text-gray-700"><strong>Project:</strong> Android Application Using Phonegap</p>
                        </div>
                    </div>
                </section>

                <!-- Professional Experience -->
                <section class="p-6">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Professional Experience</h2>
                    <div class="bg-gray-50 p-4 border rounded-lg shadow-sm space-y-4">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">PHP Laravel Developer - Qlocar Autosolution PVT LTD</h4>
                            <p class="text-gray-700"><strong>Location:</strong> Ahmedabad, India</p>
                            <p class="text-gray-700"><strong>Dates:</strong> October 2023 – Present</p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Lead development of an online platform for car sales and services.</li>
                                <li>Architect backend systems using Laravel for inventory, user authentication, and payment processing.</li>
                                <li>Develop and integrate APIs to connect web applications with mobile apps.</li>
                                <li>Collaborate with cross-functional teams to deliver high-quality, scalable products.</li>
                            </ul>
                        </div>
                        <hr class="border-gray-300">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">PHP Laravel Developer - Ebiztrait Technolabs PVT LTD</h4>
                            <p class="text-gray-700"><strong>Location:</strong> Ahmedabad, India</p>
                            <p class="text-gray-700"><strong>Dates:</strong> March 2022 – September 2023</p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Designed and implemented API services, integrated third-party APIs to enhance Shopify applications.</li>
                                <li>Utilized JavaScript and jQuery for frontend development, creating dynamic and interactive user interfaces.</li>
                                <li>Implemented payment gateways and contributed to design aesthetics using CSS, HTML, and JavaScript.</li>
                                <li>Worked closely with clients to gather requirements, provide updates, and deliver tailored solutions.</li>
                            </ul>
                        </div>
                        <hr class="border-gray-300">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">PHP Laravel Developer - Kloud Script PVT LTD</h4>
                            <p class="text-gray-700"><strong>Location:</strong> Ahmedabad, India</p>
                            <p class="text-gray-700"><strong>Dates:</strong> April 2021 – March 2022</p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Led backend development using Laravel, focusing on performance and robustness.</li>
                                <li>Developed APIs and managed SQL database maintenance for optimal functionality.</li>
                                <li>Contributed to frontend development using JavaScript and jQuery, ensuring dynamic user interfaces.</li>
                                <li>Conducted code reviews and implemented best practices to enhance code quality and maintainability.</li>
                            </ul>
                        </div>
                        <hr class="border-gray-300">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Software Engineer - Acute Informatics PVT LTD (Assigned to HDFC Bank)</h4>
                            <p class="text-gray-700"><strong>Location:</strong> Ahmedabad, India</p>
                            <p class="text-gray-700"><strong>Dates:</strong> May 2020 – April 2021</p>
                            <ul class="list-disc pl-5 text-gray-700">
                                <li>Designed and implemented banking modules for HDFC Bank.</li>
                                <li>Enhanced efficiency and performance of banking applications.</li>
                                <li>Provided technical support and training to end-users, ensuring optimal use of developed modules.</li>
                            </ul>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
