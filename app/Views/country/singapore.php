<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!--Container Main start-->
<h3 class="text-center">Earthquake Monitoring System in Singapore</h3>
<h4>Introduction</h4>
<p>In September 1996, the Meteorological Services Singapore (MMS) established a network of digital seismic for the monitoring of regional seismic station for monitoring of regional seismicity and to collect scientific data for the study of extend and intensity of tremors experienced in various parts of Singapore.</p>

<h4>Overview of Earthquake Monitoring System</h4>
<p>This system is built upon a network of digital station that are located at various remote sites in Singapore. At these stations, data acquisition and storage equipment is employed to digitally record and store seismic measurement. Using telemetry equipment and leased telephone lines, these digital recordings are transmitted on a near real-time mode to the central processing system at mms, change airport, for further processing and dissemination.</p>

<h4>Seismic Sensor and Stations</h4>
<p>The network of digital seismic station consists of five classical high gain three component seismograph stations, one of them being a VBB Global Seismographic Station (GSN) , and two strong motion down -hole stations. The down hole stations are established primarily for engineering seismology and earthquake engineering purposes. The equipment at these down hole packages which are installed at various depths below the ground. The seismometers and accelerometers convert vertical and horizontal ground motions into electrical signals that are proportional to velocities. This electrical signal are recorded as digital data by a computerized recorder.</p>

<h4>Data telemetry</h4>
<p>At each of the seismic stations, the computerized recorder digitize the earth motion signal and telemeter the recording in near real time to the cps via dedicated leased lines. In the event when the signal exceed predetermined threshold values, in addition to the continuous digital recordings, the recorder can also activate warning via dial up telephone line. A typical seismograph station is shown in figure 1.</p>

<h4>Central Processing System</h4>
<p>The CPS consist of a Central Recording System (CRS), a Seismic Data Analysis System (SDAS) and Warning System (WS). A photograph of the CPS is shown in figure 2.

    The CRS receives the digital seismic recording from the seismic stations via leased and telephone lines. The SRS is also the file server. Raw and processed waveform and parametric files are stored on the file server where they are accessible by users.

    The SDAS provides the software for the analysis of the seismic recordings. This software uses standard seismological tools. There are software features for the selection of wave arrivals to perform various analysis and the display of displacement spectra, perform attenuation analysis, earthquakes location, as well as the interactive analysis of seismic time series using fundamental display and processing operations and digital seismic processing. The SDAS is also able to perform real time data acquisition and has the facility to allow the exchange of data with the international seismological research community.
    The cps also comes with a WS that provides warning signals to interested parties via facsimile or electronic mail.
</p>

<h4>Role and Current Development Efforts</h4>
<p>With the establishment of earthquakes monitoring system. Mss is now able to perform the ole of monitoring regional seismic activities. The procedures for the detection and location of earthquakes events have been develop and implemented on an operational mode. For earthquakes that generate earth motions and affect the populace of Singapore , mms will furnish the relevant earthquakes information such as the location and magnitude of the earthquakes on a dial a phone system for access y the general public. This information is provided to assure and to help allay the fears of the public when they are affected by earth tremors that emanated from earthquakes. Figure 3 depicts the locations of earthquakes events, magnitude greater than 4.0 on Richter scale, that were detected by the system from September 1996 to December 1997.
    This system also enabled the provision of invaluable seismic data to the geotechnical, civil and structural engineers in the study of local ground motion characteristics. For the study of ground motion characteristics, mss has initiated joint research efforts with a number of civil and structural institutions and the tertiary institutions in Singapore . formal arrangement have also been made with the incorporated research institutions for seismology iris USGS for the exchange of seismic observations for research purposes.
</p>

<h4>Conclusion</h4>
<p>Although Singapore is outside the major earthquakes zones and has no history of near-field earthquakes, with the establishment of its earthquakes monitoring network, mms hopes to contribute to the regional earthquakes monitoring programs in ASEAN.
    In view of the closely knitted socio-economic fabric amongst the ASEAN countries and the reality of devastating seismic risk in the region, it is beneficial for ASEAN members to develop collaborative seismic programs and activities. The current economic crisis serves as an additional impetus for the ASEAN members to exploit the synergies an the optimal utilization of scarce seismic know-how and resources in the region. Regional collaborative efforts in earthquakes monitoring will no doubt enhance the region's capability and ability to response in a timely manner to earthquakes disasters. In this regard, the ASNET RESED project is very relevant effort that will certainly contribute to the well being of the ASEAN region.</p>

<p class="mt-5">See the Web site <a href="http://app.nea.gov.sg/cms/htdocs/category_sub.asp?cid=53">Seismology on Singapure</a>
</p>
<!--Container Main end-->
<?= $this->endSection(); ?>