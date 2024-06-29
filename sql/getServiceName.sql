CREATE FUNCTION getServiceName(
    service_id INTdoc
) RETURNS VARCHAR(32)
BEGIN
    DECLARE srv_name VARCHAR(32);

    SELECT Services_Name INTO srv_name
    FROM Services
    WHERE Services_ID = service_id;

    RETURN srv_name;
END;
