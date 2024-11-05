<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="services-section" style="padding: 50px 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center"> <!-- First tile in the first row -->
                                <a href="/photography" style="text-decoration: none;">
                                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                                        <img src="{{asset('images/photography.jpeg')}}" alt="Photography" style="width:80%; height: 200px;">
                                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Photography Coverage</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 text-center"> <!-- Second tile in the first row -->
                                <a href="/videography" style="text-decoration: none;">
                                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                                        <img src="{{asset('images/vediography.jpeg')}}" alt="Videography" style="width:80%; height: 200px;">
                                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Videography Coverage</h3>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- End of first row -->

                        <div class="row">
                            <div class="col-md-6 text-center"> <!-- First tile in the second row -->
                                <a href="/livestreaming" style="text-decoration: none;">
                                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                                        <img src="{{asset('images/live streaming.jpeg')}}" alt="Live Streaming" style="width:80%; height: 200px;">
                                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Live Streaming</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 text-center"> <!-- Second tile in the second row -->
                                <a href="/meadiareporting" style="text-decoration: none;">
                                    <div class="service-box" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px; cursor: pointer;">
                                        <img src="{{asset('images/media.jpeg')}}" alt="Media Reporting" style="width:80%; height: 200px;">
                                        <h3 style="color: black; transition: color 0.3s;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">Media Reporting</h3>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- End of second row -->
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
