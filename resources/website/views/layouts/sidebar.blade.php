<sidebar class="col-span-1 order-2 md:order-1 grid grid-cols-1 xs:grid-cols-2 md:grid-cols-1 mt-2 md:mt-0 gap-3">
      <div class="category-wrapper">
            <h3 class="category-title">មាតិការព័ត៌មាន</h3>
            <div class="category-master">
                  @include('website::components.sidebar')
            </div>
      </div>

      <img class="image-side col-span-1" src="{{asset('assets/images/advertize/sortheth.png')}}" alt="">
      <img class="image-side col-span-1" src="{{asset('assets/images/advertize/message-me.png')}}" alt="">

      <iframe class="video-side col-span-1" src="https://www.youtube.com/embed/Czzp1Vyx__U?si=hp1w9QJ7ATuxGjwB"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

      <div class="address col-span-1">
            <h3 class="header">អាសយដ្ឋាន</h3>
            <div class="body">
                  <p>មហាវិថី ព្រះនរោត្តម,សង្កាត់ ទន្លេបាសាក់, ខណ្ឌ ចំការមន, រាជធានី ភ្នំពេញ, ព្រះរាជាណាចក្រកម្ពុជា</p>
                  <hr>

                  <div class="wrapper">
                        <h3>អ៉ីម៉ែល</h3> <span> : info@police.gov.kh</span>
                  </div>
                  <div class="wrapper">
                        <h3>គេហទំព័រ</h3> <span> : www.police.gov.kh</span>
                  </div>
            </div>
      </div>

      <div class="social col-span-1">
            <h3 class="header">បណ្តាញសង្គម</h3>
            <div class="body">
                  <div class="body-wrapper">
                        <img class="image-bg" src="{{asset('assets/images/background.jpg')}}" alt="">
                        <div class="bg-overlay"></div>

                        <div class="content-overlay">
                              <div class="social-links">
                                    <a href="#"><img src="{{asset('assets/images/police-icon-removebg-preview.png')}}"
                                                alt=""></a>
                                    <a href="#"
                                          title="អគ្គស្នងការដ្ឋាននគរបាលជាតិ- General Commissariat of National Police">
                                          <p>
                                                អគ្គស្នងការដ្ឋាននគរបាលជាតិ- General
                                                Commissariat of National Police
                                          </p>
                                          <span>
                                                292,386 អ្នកតាមដាន
                                          </span>
                                    </a>
                              </div>

                              <div class="social-contact">
                                    <a href="#">
                                          <div class="contact">
                                                <i class="fa-brands fa-facebook"></i>
                                                <span class="text">តាមដានទំព័រ</span>
                                          </div>
                                    </a>
                                    <a href="#">
                                          <div class="contact">
                                                <i class="fa-solid fa-message"></i>
                                                <span class="text">សូមទាក់ទងមកយើងខ្ញុំ</span>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <div class="map col-span-1">
            <h3 class="header">ផែនទី</h3>
            <div class="body">
                  <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4079.7975521454755!2d104.91131912398193!3d11.563868319113546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513fc957f573%3A0x4145d4f177984a03!2sOrussey%20Market!5e0!3m2!1sen!2skh!4v1698289802683!5m2!1sen!2skh"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
      </div>

      <div class="download col-span-1">
            <h3 class="header">កម្មវិធីសំរាប់ទូរស័ព្ទ</h3>
            <div class="body">
                  <div class="download-links">
                        <a href="#"><img src="{{ asset('assets/images/android.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/images/iphone.png') }}" alt=""></a>
                  </div>
                  <hr>
                  <div class="social-links">
                        <ul>
                              <li><a href="#"><img src="{{ asset('assets/icons/telegram.png') }}" alt=""></a></li>
                              <li><a href="#"><img src="{{ asset('assets/icons/facebook.png') }}" alt=""></a></li>
                              <li><a href="#"><img src="{{ asset('assets/icons/youtube.png') }}" alt=""></a></li>
                        </ul>
                  </div>
            </div>
      </div>



</sidebar>