<?php

namespace BTN\BriefingRoom\Reports;

class LinkBuilder
{
    public string $type;
    public int $resourceId;
    public array $args = [];

    public function __construct(string $type, int $resourceId)
    {
        $this->type = $type;
        $this->resourceId = $resourceId;
    }

    public function addArg(string $key, string $value): LinkBuilder
    {
        $this->args[$key] = $value;
        return $this;
    }

    public function tap(\Closure $closure): LinkBuilder
    {
        $closure($this);
        return $this;
    }

    public function getUrl(): string
    {
        return $this->getCsvUrl();
    }

    public function getCsvUrl(): string
    {
        return $this->getUrlWithFormat('csv');
    }

    public function getHtmlUrl(): string
    {
        return $this->getUrlWithFormat('html');
    }

    protected function getUrlWithFormat(string $format): string
    {
        return add_query_arg([
            'btn_download_report' => $this->type,
            "{$this->type}_id" => $this->resourceId,
            ...$this->args,
            'format' => $format,
        ], site_url());
    }
}
