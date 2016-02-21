This file integrates the SEOstats library with CodeIgniter.

The SEOstats library can be found here:
https://github.com/eyecatchup/SEOstats

Place the SEOstats library in the third_party folder in CI and then place the seostatistics.php file in this repo into the libraries folder of CI.

Example usage is as follows:

$google = $this->seostatistics->google($url);
$rank = $google->getPageRank();
