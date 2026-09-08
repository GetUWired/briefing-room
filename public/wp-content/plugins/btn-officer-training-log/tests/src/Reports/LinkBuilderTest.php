<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Reports\LinkBuilder;
use WP_UnitTestCase;

class LinkBuilderTest extends WP_UnitTestCase
{
    public function test_url_contains_required_query_arguments()
    {
        $builder = new LinkBuilder('manager', 1);

        $this->assertStringContainsString('format=csv', $builder->getUrl());
        $this->assertStringContainsString('manager_id=1', $builder->getUrl());
        $this->assertStringContainsString('btn_download_report=manager', $builder->getUrl());
    }

    public function test_url_contains_correct_format_argument()
    {
        $builder = new LinkBuilder('manager', 1);

        $this->assertStringContainsString('format=csv', $builder->getUrl());
        $this->assertStringContainsString('format=csv', $builder->getCsvUrl());
        $this->assertStringContainsString('format=html', $builder->getHtmlUrl());
    }

    public function test_url_contains_additional_query_arguments()
    {
        $builder = new LinkBuilder('manager', 1);
        $builder->addArg('foo', 'bar');

        $this->assertStringContainsString('foo=bar', $builder->getUrl());
    }
}
