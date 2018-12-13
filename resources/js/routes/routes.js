import CGI from '.././components/pages/cgi';
import TAXES from '.././components/pages/taxes';
import faqs from '.././components/pages/faqs';
import faqs_single from '.././components/pages/faqs_single';
import faqs_question from '.././components/pages/faqs_question';
import infos from '.././components/pages/infos';
import coefficients from '.././components/pages/outils/coefficients';
import tarif_fiscal from '.././components/pages/outils/tarif-fiscal';
import nomenclature from '.././components/pages/outils/nomenclature';
import indexOutil from '.././components/pages/outils/index';
import SingleArticle from '.././components/pages/article-single';


export const routes = [
    {
        path : "/", 
        redirect : "/cgi", 
    },
    {
        path : "/cgi", 
        component : CGI, 
        name : "CGI",
    },
    {
        path : "/taxes", 
        component : TAXES, 
        name : "TAXES",
    },
    {
        path : "/faqs", 
        component : faqs, 
        name : "faqs",
    },
    {
        path : "/faqs/:id", 
        component : faqs_single, 
        name : "faqs_single",
    },
    {
        path : "/faqs/questions/:id", 
        component : faqs_question, 
        name : "faqs_question",
    },
    {
        path : "/infos", 
        component : infos, 
        name : "infos",
    },
    {
        path : "/article/:num/:type", 
        component : SingleArticle, 
        name : "ArticleByNum",
    },
    {
        path : "/articles/:id", 
        component : SingleArticle, 
        name : "ArticleById",
    },
    {
        path : "/outils", 
        component : indexOutil, 
        name : "outil",
    },
    {
        path : "/outils/tarif-fiscal", 
        component : tarif_fiscal, 
        name : "tarif-fiscal",
    },
    {
        path : "/outils/coefficients", 
        component : coefficients, 
        name : "coefficients",
    },
    {
        path : "/outils/nomenclature", 
        component : nomenclature, 
        name : "nomenclature",
    },
];