<?php

use Aspose\PDF\PdfApi;

class PdfApiTest extends PHPUnit_Framework_TestCase {
    
    protected $pdf;

    protected function setUp()
    {        
        $this->pdf = new PdfApi();
    }
    
    public function testDeletePage()
    {        
        $result = $this->pdf->DeletePage($name="Test.pdf", $pageNumber=1, $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testDeleteProperties()
    {        
        $result = $this->pdf->DeleteProperties($name="Test.pdf", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testDeleteProperty()
    {        
        $result = $this->pdf->DeleteProperty($name="Test.pdf", $propertyName="Test", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetDocument()
    {        
        $result = $this->pdf->GetDocument($name="Test.pdf", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    /*public function testGetDocumentAttachmentByIndex()
    {        
        $result = $this->pdf->GetDocumentAttachmentByIndex($name="attachment.pdf", $attachmentIndex=1, $storage = null, $folder = null);
        print_r($result);
        //$this->assertEquals(200, $result->Code);
    }*/
    
    public function testGetDocumentAttachments()
    {        
        $result = $this->pdf->GetDocumentAttachments($name="attachment.pdf", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetDocumentBookmarks()
    {        
        $result = $this->pdf->GetDocumentBookmarks($name="Test.pdf", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    /*public function testGetDocumentBookmarksChildren()
    {        
        $result = $this->pdf->GetDocumentBookmarksChildren($name="Test.pdf", $bookmarkPath = 1, $storage = null, $folder = null);
        print_r($result); exit;
        $this->assertEquals(200, $result->Code);
    }*/
    
    public function testGetDocumentProperties()
    {        
        $result = $this->pdf->GetDocumentProperties($name="Test.pdf", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetDocumentProperty()
    {        
        $result = $this->pdf->GetDocumentProperty($name="Test.pdf", $propertyName="Author", $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetDocumentWithFormat()
    {        
        $result = $this->pdf->GetDocumentWithFormat($name="Test.pdf", $format="tiff", $storage = null, $folder = null, $outPath = "update-test.tiff");
    }
    
    public function testGetDownloadDocumentAttachmentByIndex()
    {        
        $result = $this->pdf->GetDownloadDocumentAttachmentByIndex($name="Test.pdf", $attachmentIndex=1, $storage = null, $folder = null);
        print_r($result); exit;
        $fh = fopen(getcwd(). '/Data/Output/update-test.tiff', 'w');
        fwrite($fh, $result);
        fclose($fh);
        $this->assertFileExists(getcwd(). '/Data/Output/update-test.tiff');
    }
    
    public function testGetExtractBarcodes()
    {        
        $result = $this->pdf->GetExtractBarcodes($name="Barcode.pdf", $pageNumber=1, $imageNumber=1, $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetField()
    {        
        $result = $this->pdf->GetField($name="complaintform.pdf", $fieldName="first", $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetFields()
    {        
        $result = $this->pdf->GetFields($name="complaintform.pdf", $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetFragment()
    {        
        $result = $this->pdf->GetFragment($name="Test.pdf", $pageNumber=1, $fragmentNumber=1, $withEmpty = null, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetFragmentTextFormat()
    {        
        $result = $this->pdf->GetFragmentTextFormat($name="Test.pdf", $pageNumber=1, $fragmentNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetFragments()
    {        
        $result = $this->pdf->GetFragments($name="Test.pdf", $pageNumber=1, $withEmpty = null, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetImage()
    {        
        $result = $this->pdf->GetImage($name="Test.pdf", $pageNumber=1, $imageNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetImageWithFormat()
    {        
        $result = $this->pdf->GetImageWithFormat($name="Test.pdf", $pageNumber=1, $imageNumber=1, $format="png", $width = 100, $height = 100, $storage = null, $folder = null);
        $fh = fopen(getcwd(). '/Data/Output/Test.png', 'w');
        fwrite($fh, $result);
        fclose($fh);
        $this->assertFileExists(getcwd(). '/Data/Output/Test.png');
    }
    
    public function testGetImages()
    {        
        $result = $this->pdf->GetImages($name="Test.pdf", $pageNumber=1, $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPage()
    {        
        $result = $this->pdf->GetPage($name="Test.pdf", $pageNumber=1, $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageAnnotation()
    {        
        $result = $this->pdf->GetPageAnnotation($name="test_annotation.pdf", $pageNumber=1, $annotationNumber=1, $storage = null, $folder = null);
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageAnnotations()
    {        
        $result = $this->pdf->GetPageAnnotations($name="test_annotation.pdf", $pageNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageAnnotations()
    {        
        $result = $this->pdf->GetPageAnnotations($name="test_annotation.pdf", $pageNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageLinkAnnotationByIndex()
    {        
        $result = $this->pdf->GetPageLinkAnnotationByIndex($name="test_annotation.pdf", $pageNumber=1, $linkIndex=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageLinkAnnotations()
    {        
        $result = $this->pdf->GetPageLinkAnnotations($name="test_annotation.pdf", $pageNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageTextItems()
    {        
        $result = $this->pdf->GetPageTextItems($name="Test.pdf", $pageNumber=1, $withEmpty = null, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetPageWithFormat()
    {        
        $result = $this->pdf->GetPageWithFormat($name="Test.pdf", $pageNumber=1, $format="gif", $width = null, $height = null, $storage = null, $folder = null);        
        $fh = fopen(getcwd(). '/Data/Output/Test.gif', 'w');
        fwrite($fh, $result);
        fclose($fh);
        $this->assertFileExists(getcwd(). '/Data/Output/Test.gif');
    }
    
    public function testGetPages()
    {        
        $result = $this->pdf->GetPages($name="Test.pdf", $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
     
    public function testGetSegment()
    {        
        $result = $this->pdf->GetSegment($name="Test.pdf", $pageNumber=1, $fragmentNumber=1, $segmentNumber=1, $storage = null, $folder = null);        
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetSegmentTextFormat()
    {        
        $result = $this->pdf->GetSegmentTextFormat($name="Test.pdf", $pageNumber=1, $fragmentNumber=1, $segmentNumber=1, $storage = null, $folder = null);         
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetSegments()
    {        
        $result = $this->pdf->GetSegments($name="Test.pdf", $pageNumber=1, $fragmentNumber=1, $withEmpty = null, $storage = null, $folder = null); 
        print_r($result); exit;
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetTextItems()
    {        
        $result = $this->pdf->GetTextItems($name="Test.pdf", $withEmpty = null, $storage = null, $folder = null);         
        $this->assertEquals(200, $result->Code);
    }
    
    public function testGetWordsPerPage()
    {        
        $result = $this->pdf->GetWordsPerPage($name="Test.pdf", $storage = null, $folder = null);         
        $this->assertEquals(200, $result->Code);
    }
                        
}    