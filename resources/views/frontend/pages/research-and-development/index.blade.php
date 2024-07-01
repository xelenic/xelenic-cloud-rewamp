@extends('frontend.layouts.app')

@section('content')


    <div class="" style="background: #2478d9; color: white;padding-top: 30px; padding-bottom: 30px;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4" style="text-align: center;padding-top: 31px;">Research and Development</h1>
                    <p style=" color: white;text-align: center;">
                        Welcome to the Research and Development page of Xelenic Cloud. Our R&amp;D team is dedicated to pushing the boundaries of technology and innovation to bring you the best cloud solutions. We focus on developing cutting-edge features that help businesses of all sizes achieve their digital transformation goals.
                    </p>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <h2 class="mt-5" style="text-align: center">Our Focus Areas</h2>
        <div style="border-width: 1px;border-color: #dfdfdf;border-style: dotted;margin-top: 10px;margin-bottom: 30px;"></div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">Cloud Computing</h4>
                        <div style="background: url('{{url('icon/clouds.png')}}');height: 120px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 20px;margin-bottom: 10px;"></div>
                    </div>
                    <div class="card-body">
                        <p>Revolutionizing cloud solutions to offer scalable, reliable, and high-performing infrastructure.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">Data Security</h4>
                        <div style="background: url('{{url('icon/secure.png')}}');height: 120px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 20px;margin-bottom: 10px;"></div>
                    </div>
                    <div class="card-body">
                        <p>Strengthening security measures to guarantee data integrity and confidentiality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">AI and Machine Learning</h4>
                        <div style="background: url('{{url('icon/ai.png')}}');height: 120px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 20px;margin-bottom: 10px;"></div>
                    </div>
                    <div class="card-body">
                        <p>Embedding AI and ML to automate operations and deliver intelligent insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">DevOps</h4>
                        <div style="background: url('{{url('icon/clouds.png')}}');height: 120px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 20px;margin-bottom: 10px;"></div>
                    </div>
                    <div class="card-body">
                        <p>Creating tools and methodologies to optimize development, deployment, and processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <div style="text-align: center;background-color: #2976cd;padding-top: 40px;padding-bottom: 70px;color: white;">
            <h2 class="mt-5">Get Involved</h2>
            <p style="color: white;padding-top: 20px;">
                We invite you to join our community and participate in our R&amp;D initiatives. Share your ideas, collaborate with our team, and help shape the future of cloud computing.
            </p>
        </div>



    <div class="container">

        <h2 class="mt-5" style="text-align: center">Our Achievements</h2>
        <div style="border-width: 1px;border-color: #dfdfdf;border-style: dotted;margin-top: 10px;margin-bottom: 30px;"></div>

        <p style="text-align: center">
            Over the years, our R&D team has achieved significant milestones, including the development of:
        </p>




        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Parrot DB:</h2>
                    </div>
                    <div class="card-body">
                        A cutting-edge cloud-based database solution designed for scalability and efficiency. Parrot DB
                        offers seamless integration with existing systems, providing high availability and performance.
                        Its distributed architecture ensures data redundancy and fault tolerance, making it ideal for
                        mission-critical applications. Advanced features like automated backups, real-time analytics,
                        and dynamic scaling make Parrot DB the go-to choice for modern enterprises looking to leverage
                        cloud technology.
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Bucket Server:</h2>
                    </div>
                    <div class="card-body">
                        A powerful cloud server offering robust computing resources and advanced features. Bucket Server
                        provides unmatched flexibility and control, allowing users to configure their environments to
                        meet specific needs. With high-performance processors, ample storage, and extensive networking
                        options, Bucket Server supports a wide range of applications from simple web hosting to complex
                        data processing tasks. Enhanced security features, including encryption and access controls,
                        ensure that your data is always protected.

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Load Balancer:</h2>
                    </div>
                    <div class="card-body">
                        A solution designed to efficiently manage load balancing between Cloud Server Buckets and
                        Clousers. The Load Balancer optimizes traffic distribution, ensuring maximum uptime and
                        performance. It dynamically adjusts to traffic patterns, preventing overloads and reducing
                        latency. With features like health monitoring, automated failover, and SSL termination, the
                        Load Balancer guarantees a smooth and secure user experience. It also supports integration with
                        various cloud services, making it a versatile tool for managing complex infrastructures.

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Parrot DB:</h2>
                    </div>
                    <div class="card-body">
                        A cutting-edge cloud-based database solution designed for scalability and efficiency. Parrot DB
                        offers seamless integration with existing systems, providing high availability and performance.
                        Its distributed architecture ensures data redundancy and fault tolerance, making it ideal for
                        mission-critical applications. Advanced features like automated backups, real-time analytics,
                        and dynamic scaling make Parrot DB the go-to choice for modern enterprises looking to leverage
                        cloud technology.
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection



